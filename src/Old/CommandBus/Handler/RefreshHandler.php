<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\CommandBus\Handler;

use ApiClients\Client\Github\CommandBus\Command\RefreshCommand;
use ApiClients\Tools\Services\Client\FetchAndHydrateService;
use React\Promise\PromiseInterface;

final class RefreshHandler
{
    private FetchAndHydrateService $service;

    public function __construct(FetchAndHydrateService $service)
    {
        $this->service = $service;
    }

    public function handle(RefreshCommand $command): PromiseInterface
    {
        $resource = $command->getResource();

        return $this->service->fetch($resource->url(), '', $resource::HYDRATE_CLASS);
    }
}
