<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\CommandBus\Handler;

use ApiClients\Client\Github\CommandBus\Command\SaveCommand;
use ApiClients\Foundation\Hydrator\Hydrator;
use ApiClients\Foundation\Transport\Service\RequestService;
use ApiClients\Middleware\Json\JsonStream;
use React\Promise\PromiseInterface;
use RingCentral\Psr7\Request;

final class SaveHandler
{
    private RequestService $requestService;

    private Hydrator $hydrator;

    public function __construct(RequestService $requestService, Hydrator $hydrator)
    {
        $this->requestService = $requestService;
        $this->hydrator       = $hydrator;
    }

    public function handle(SaveCommand $command): PromiseInterface
    {
        return $this->requestService->request(
            new Request(
                'PATCH',
                $command->getUrl(),
                [],
                new JsonStream($command->getData())
            )
        )->then(function ($response) use ($command) {
            return $this->hydrator->hydrate(
                $command->getHydrateClass(),
                $response->getBody()->getParsedContents()
            );
        });
    }
}
