<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\Service;

use ApiClients\Foundation\Transport\Service\RequestService;
use Psr\Http\Message\ResponseInterface;
use RingCentral\Psr7\Request;
use Rx\AsyncSchedulerInterface;
use Rx\Observable;
use Rx\Scheduler;
use Rx\Subject\Subject;

use function Kelunik\LinkHeaderRfc5988\parseLinks;

class IteratePagesService
{
    private RequestService $requestService;

    private AsyncSchedulerInterface $scheduler;

    public function __construct(RequestService $requestService, ?AsyncSchedulerInterface $scheduler = null)
    {
        $this->scheduler      = $scheduler ?: Scheduler::getAsync();
        $this->requestService = $requestService;
    }

    public function iterate(string $path): Observable
    {
        $paths = new Subject();

        return Observable::of($path, $this->scheduler)
            ->merge($paths)
            ->flatMap(function ($path) {
                return Observable::fromPromise($this->requestService->request(new Request('GET', $path)));
            })
            ->do(function (ResponseInterface $response) use ($paths): void {
                if (! $response->hasHeader('link')) {
                    $paths->onCompleted();

                    return;
                }

                $parsedLinks = parseLinks($response->getHeaderLine('link'));
                $links       = [
                    'next' => $parsedLinks->getByRel('next'),
                    'last' => $parsedLinks->getByRel('last'),
                ];

                if ($links['next'] === null || $links['last'] === null) {
                    $paths->onCompleted();

                    return;
                }

                $this->scheduler->schedule(static function () use ($paths, $links): void {
                    $paths->onNext($links['next']->getUri());
                });
            })
            ->map(static function (ResponseInterface $response) {
                return $response->getBody()->getParsedContents();
            });
    }

    private function sendRequest(string $path, Subject $subject): void
    {
        $this->requestService->
            request(new Request('GET', $path))->
            then(
                function ($response) use ($subject): void {
                    $this->handleResponse($response, $subject);
                },
                static function ($error) use ($subject): void {
                    $subject->onError($error);
                }
            );
    }

    private function handleResponse(
        ResponseInterface $response,
        Subject $subject
    ): void {
        $subject->onNext($response->getBody()->getParsedContents());

        if ($subject->isDisposed() || ! $subject->hasObservers()) {
            $subject->onCompleted();

            return;
        }

        if (! $response->hasHeader('link')) {
            $subject->onCompleted();

            return;
        }

        $parsedLinks = parseLinks($response->getHeaderLine('link'));
        $links       = [
            'next' => $parsedLinks->getByRel('next'),
            'last' => $parsedLinks->getByRel('last'),
        ];

        if ($links['next'] === null || $links['last'] === null) {
            $subject->onCompleted();
        }

        $this->sendRequest($links['next']->getUri(), $subject);
    }
}
