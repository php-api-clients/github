<?php declare(strict_types=1);

namespace ApiClients\Client\Github\Service;

use ApiClients\Foundation\Service\ServiceInterface;
use ApiClients\Foundation\Transport\Service\RequestService;
use Psr\Http\Message\ResponseInterface;
use React\Promise\CancellablePromiseInterface;
use RingCentral\Psr7\Request;
use Rx\Disposable\CallbackDisposable;
use Rx\Observable;
use Rx\ObserverInterface;
use Rx\SchedulerInterface;
use Rx\Subject\Subject;
use function React\Promise\all;
use function React\Promise\resolve;

class IteratePagesService implements ServiceInterface
{
    /**
     * @var RequestService
     */
    private $requestService;

    /**
     * @param RequestService $requestService
     */
    public function __construct(RequestService $requestService)
    {
        $this->requestService = $requestService;
    }

    public function handle(string $path = null): CancellablePromiseInterface
    {
        return resolve(Observable::create(function (
            ObserverInterface $observer,
            SchedulerInterface $scheduler
        ) use ($path) {

            $subject = new Subject();
            $subject->asObservable()->subscribeCallback(
                [$observer, 'onNext'],
                [$observer, 'onError'],
                [$observer, 'onCompleted'],
                $scheduler
            );

            $this->sendRequest($path, $subject);

            return new CallbackDisposable(function () use ($subject) {
                $subject->dispose();
            });
        }));
    }

    private function sendRequest(string $path, Subject $subject)
    {
        $this->requestService->
            handle(new Request('GET', $path))->
            then(
                function ($response) use ($subject) {
                    $this->handleResponse($response, $subject);
                },
                function ($error) use ($subject) {
                    $subject->onError($error);
                }
            )
        ;
    }

    private function handleResponse(
        ResponseInterface $response,
        Subject $subject
    ) {
        $subject->onNext($response->getBody()->getJson());

        if ($subject->isDisposed() || !$subject->hasObservers()) {
            $subject->onCompleted();
            return;
        }

        if (!$response->hasHeader('link')) {
            $subject->onCompleted();
            return;
        }

        $links = [
            'next' => false,
            'last' => false,
        ];
        foreach (explode(', ', $response->getHeader('link')[0]) as $link) {
            list($url, $rel) = explode('>; rel="', ltrim(rtrim($link, '"'), '<'));
            if (isset($links[$rel])) {
                $links[$rel] = $url;
            }
        }

        if ($links['next'] === false || $links['last'] === false) {
            $subject->onCompleted();
            return;
        }

        $this->sendRequest($links['next'], $subject);
    }
}
