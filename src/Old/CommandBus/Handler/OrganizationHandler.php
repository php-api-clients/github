<?php declare(strict_types=1);

namespace ApiClients\Client\Github\CommandBus\Handler;

use ApiClients\Client\Github\CommandBus\Command\OrganizationCommand;
use ApiClients\Client\Github\Resource\OrganizationInterface;
use ApiClients\Tools\Services\Client\FetchAndHydrateService;
use React\Promise\PromiseInterface;

final class OrganizationHandler
{
    /**
     * @var FetchAndHydrateService
     */
    private $service;

    /**
     * @param FetchAndHydrateService $service
     */
    public function __construct(FetchAndHydrateService $service)
    {
        $this->service = $service;
    }

    /**
     * Fetch the given repository and hydrate it.
     *
     * @param  OrganizationCommand $command
     * @return PromiseInterface
     */
    public function handle(OrganizationCommand $command): PromiseInterface
    {
        return $this->service->fetch('orgs/' . $command->getOrganization(), '', OrganizationInterface::HYDRATE_CLASS);
    }
}
