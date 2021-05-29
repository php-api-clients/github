<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\CommandBus\Handler\Repository;

use ApiClients\Client\Github\CommandBus\Command\Repository\CompareCommitsCommand;
use ApiClients\Client\Github\Resource\Repository\CompareInterface;
use ApiClients\Tools\Services\Client\FetchAndHydrateService;
use React\Promise\PromiseInterface;

final class CompareCommitsHandler
{
    private FetchAndHydrateService $service;

    public function __construct(FetchAndHydrateService $service)
    {
        $this->service = $service;
    }

    /**
     * Fetch the given repository and hydrate it.
     */
    public function handle(CompareCommitsCommand $command): PromiseInterface
    {
        return $this->service->fetch(
            'repos/' . $command->getRepository()->fullName() . '/compare/' . $command->getBase() . '...' . $command->getHead(),
            '',
            CompareInterface::HYDRATE_CLASS
        );
    }
}
