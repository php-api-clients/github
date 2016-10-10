<?php declare(strict_types=1);

namespace ApiClients\Github\CommandBus\Handler;

use ApiClients\Foundation\Transport\CommandBus\Command\JsonDecodeCommand;
use ApiClients\Foundation\Transport\CommandBus\Command\SimpleRequestCommand;
use ApiClients\Foundation\Transport\Response;
use ApiClients\Github\CommandBus\Command\IteratePagesCommand;
use League\Tactician\CommandBus;
use Psr\Http\Message\ResponseInterface;
use Rx\Observable;
use Rx\ObserverInterface;
use Rx\SchedulerInterface;

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

    public function handle(IteratePagesCommand $command): Observable\AnonymousObservable
    {
        return Observable::create(function (
            ObserverInterface $observer,
            SchedulerInterface $scheduler
        ) use ($command) {
            $this->commandBus->
                handle(new SimpleRequestCommand($command->getPath()))->
                then(function (Response $response) use ($observer) {
                    $this->handleResponse($response->getResponse(), $observer);
                })
            ;
        });
    }

    private function handleResponse(ResponseInterface $response, ObserverInterface $observer)
    {
        if (!$response->hasHeader('link')) {
            $this->handleResponseContents($response, $observer);
            $observer->onCompleted();
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
            $this->handleResponseContents($response, $observer);
            $observer->onCompleted();
            return;
        }

        if ($links['next'] == $links['last']) {
            $this->handleResponseContents($response, $observer);
            $observer->onCompleted();
            return;
        }

        $this->commandBus->
            handle(new SimpleRequestCommand($links['next']))->
            then(function (Response $response) use ($observer) {
                $this->handleResponse($response->getResponse(), $observer);
            })
        ;

        $this->handleResponseContents($response, $observer);
    }

    private function handleResponseContents(ResponseInterface $response, ObserverInterface $observer)
    {
        $this->commandBus->
            handle(new JsonDecodeCommand($response->getBody()->getContents()))->
            then(function ($json) use ($observer) {
                $observer->onNext($json);
            })
        ;
    }
}
