<?php declare(strict_types=1);

namespace ApiClients\Client\Github\CommandBus\Handler;

use ApiClients\Client\Github\CommandBus\Command\MyOrganizationsCommand;
use ApiClients\Client\Github\Resource\OrganizationInterface;
use ApiClients\Client\Github\Service\IteratePagesService;
use ApiClients\Foundation\Hydrator\Hydrator;
use function ApiClients\Tools\Rx\observableFromArray;
use React\Promise\PromiseInterface;
use function React\Promise\resolve;

final class MyOrganizationsHandler
{
    /**
     * @var IteratePagesService
     */
    private $service;

    /**
     * @var Hydrator
     */
    private $hydrator;

    /**
     * @param IteratePagesService $service
     * @param Hydrator            $hydrator
     */
    public function __construct(IteratePagesService $service, Hydrator $hydrator)
    {
        $this->service = $service;
        $this->hydrator = $hydrator;
    }

    /**
     * @param  MyOrganizationsCommand $command
     * @return PromiseInterface
     */
    public function handle(MyOrganizationsCommand $command): PromiseInterface
    {
        return resolve(
            $this->service->iterate('user/orgs')
                ->flatMap(function ($organizations) {
                    return observableFromArray($organizations);
                })->map(function ($organization) {
                    return $this->hydrator->hydrate(OrganizationInterface::HYDRATE_CLASS, $organization);
                })
        );
    }
}
