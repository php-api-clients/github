<?php declare(strict_types=1);

namespace ApiClients\Client\Github\CommandBus\Handler;

use ApiClients\Foundation\Transport\CommandBus\Command\SimpleRequestCommand;
use ApiClients\Client\Github\CommandBus\Command\IteratePagesCommand;
use ApiClients\Tools\CommandBus\CommandBus;
use Psr\Http\Message\ResponseInterface;
use React\Promise\CancellablePromiseInterface;
use React\Promise\FulfilledPromise;
use Rx\Disposable\CallbackDisposable;
use Rx\Observable;
use Rx\ObserverInterface;
use Rx\SchedulerInterface;
use function React\Promise\all;
use function React\Promise\resolve;

class IteratePagesHandler
{
    /**
     * @var CommandBus
     */
    private $commandBus;

    /**
     * @param CommandBus $commandBus
     */
    public function __construct(CommandBus $commandBus)
    {
        $this->commandBus = $commandBus;
    }

    public function handle(IteratePagesCommand $command): CancellablePromiseInterface
    {
        return resolve(Observable::create(function (
            ObserverInterface $observer,
            SchedulerInterface $scheduler
        ) use ($command) {
            $promise = $this->commandBus->
                handle(new SimpleRequestCommand($command->getPath()))->
                done(function ($response) use ($observer) {
                    return $this->handleResponse($response, $observer);
                })
            ;

            return new CallbackDisposable(function () use ($promise) {
                $promise->cancel();
            });
        }));
    }

    private function handleResponse(
        ResponseInterface $response,
        ObserverInterface $observer
    ): CancellablePromiseInterface {
        if (!$response->hasHeader('link')) {
            return $this->handleResponseContentsComplete($response, $observer);
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
            return $this->handleResponseContentsComplete($response, $observer);
        }

        if ($links['next'] == $links['last']) {
            return $this->handleResponseContentsComplete($response, $observer);
        }

        $promises = [];

        $promises[] = $this->commandBus->
            handle(new SimpleRequestCommand($links['next']))->
            then(function (ResponseInterface $response) use ($observer) {
                return $this->handleResponse($response, $observer);
            })
        ;

        $promises[] = $this->handleResponseContents($response, $observer);

        return all($promises);
    }

    private function handleResponseContentsComplete(
        ResponseInterface $response,
        ObserverInterface $observer
    ): CancellablePromiseInterface {
        return $this->handleResponseContents($response, $observer)->then(function () use ($observer) {
            $observer->onCompleted();
            return new FulfilledPromise();
        });
    }

    private function handleResponseContents(
        ResponseInterface $response,
        ObserverInterface $observer
    ): CancellablePromiseInterface {
        $observer->onNext($response->getBody()->getJson());
        return new FulfilledPromise();
    }
}
