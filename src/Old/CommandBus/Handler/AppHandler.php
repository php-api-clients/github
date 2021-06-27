<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\CommandBus\Handler;

use ApiClients\Client\Github\CommandBus\Command\AppCommand;
use ApiClients\Client\Github\Resource\AppInterface;
use ApiClients\Tools\Services\Client\FetchAndHydrateService;
use React\Promise\PromiseInterface;

use function React\Promise\resolve;

final class AppHandler
{
    private FetchAndHydrateService $service;

    public function __construct(FetchAndHydrateService $service)
    {
        $this->service = $service;
    }

    public function handle(AppCommand $command): PromiseInterface
    {
        return resolve(
            $this->service->fetch(
                'app',
                '',
                AppInterface::HYDRATE_CLASS
            )
        );
    }
}
