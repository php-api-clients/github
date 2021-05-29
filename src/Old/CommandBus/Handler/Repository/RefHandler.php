<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\CommandBus\Handler\Repository;

use ApiClients\Client\Github\CommandBus\Command\Repository\RefCommand;
use ApiClients\Client\Github\Resource\Git\RefInterface;
use ApiClients\Foundation\Hydrator\Hydrator;
use ApiClients\Foundation\Transport\Service\RequestService;
use ApiClients\Middleware\Json\JsonStream;
use React\Promise\PromiseInterface;
use RingCentral\Psr7\Request;

final class RefHandler
{
    private RequestService $requestService;

    private Hydrator $hydrator;

    public function __construct(RequestService $requestService, Hydrator $hydrator)
    {
        $this->requestService = $requestService;
        $this->hydrator       = $hydrator;
    }

    public function handle(RefCommand $command): PromiseInterface
    {
        return $this->requestService->request(
            new Request(
                'POST',
                'repos/' . $command->getRepository() . '/git/' . $command->getRef(),
                [],
                new JsonStream([
                    'sha' => $command->getCommit(),
                ])
            )
        )->then(function ($tree) {
            return $this->hydrator->hydrate(RefInterface::HYDRATE_CLASS, $tree->getBody()->getParsedContents());
        });
    }
}
