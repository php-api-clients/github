<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\CommandBus\Handler\Repository;

use ApiClients\Client\Github\CommandBus\Command\Repository\UpdateSettingsCommand;
use ApiClients\Client\Github\Resource\RepositoryInterface;
use ApiClients\Foundation\Hydrator\Hydrator;
use ApiClients\Foundation\Transport\Service\RequestService;
use ApiClients\Middleware\Json\JsonStream;
use React\Promise\PromiseInterface;
use RingCentral\Psr7\Request;

final class UpdateSettingsHandler
{
    private RequestService $requestService;

    private Hydrator $hydrator;

    public function __construct(RequestService $requestService, Hydrator $hydrator)
    {
        $this->requestService = $requestService;
        $this->hydrator       = $hydrator;
    }

    public function handle(UpdateSettingsCommand $command): PromiseInterface
    {
        return $this->requestService->request(
            new Request(
                'PATCH',
                'repos/' . $command->getRepository(),
                [],
                new JsonStream($command->getSettings())
            )
        )->then(function ($repository) {
            return $this->hydrator->hydrate(
                RepositoryInterface::HYDRATE_CLASS,
                $repository->getBody()->getParsedContents()
            );
        });
    }
}
