<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\CommandBus\Handler\User;

use ApiClients\Client\Github\CommandBus\Command\User\OrganizationsCommand;
use ApiClients\Client\Github\Resource\OrganizationInterface;
use ApiClients\Client\Github\Service\IteratePagesService;
use ApiClients\Foundation\Hydrator\Hydrator;
use React\Promise\PromiseInterface;

use function ApiClients\Tools\Rx\observableFromArray;
use function React\Promise\resolve;

final class OrganizationsHandler
{
    private IteratePagesService $service;

    private Hydrator $hydrator;

    public function __construct(IteratePagesService $service, Hydrator $hydrator)
    {
        $this->service  = $service;
        $this->hydrator = $hydrator;
    }

    public function handle(OrganizationsCommand $command): PromiseInterface
    {
        return resolve(
            $this->service->iterate('users/' . $command->getLogin() . '/orgs')
                ->flatMap(static function ($organizations) {
                    return observableFromArray($organizations);
                })->map(function ($organization) {
                    return $this->hydrator->hydrate(OrganizationInterface::HYDRATE_CLASS, $organization);
                })
        );
    }
}
