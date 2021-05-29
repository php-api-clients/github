<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\CommandBus\Handler;

use ApiClients\Client\Github\CommandBus\Command\LicensesCommand;
use ApiClients\Client\Github\CommandBus\Command\MyOrganizationsCommand;
use ApiClients\Client\Github\Resource\LicenseInterface;
use ApiClients\Tools\Services\Client\FetchAndIterateService;
use React\Promise\PromiseInterface;

use function React\Promise\resolve;

final class LicensesHandler
{
    private FetchAndIterateService $service;

    public function __construct(FetchAndIterateService $service)
    {
        $this->service = $service;
    }

    /**
     * @param  MyOrganizationsCommand $command
     */
    public function handle(LicensesCommand $command): PromiseInterface
    {
        return resolve(
            $this->service->iterate(
                'licenses',
                '',
                LicenseInterface::HYDRATE_CLASS
            )
        );
    }
}
