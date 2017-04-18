<?php declare(strict_types=1);

namespace ApiClients\Client\Github\CommandBus\Handler\User;

use ApiClients\Client\Github\CommandBus\Command\User\OrganizationsCommand;
use ApiClients\Client\Github\Resource\OrganizationInterface;
use ApiClients\Client\Github\Service\IteratePagesService;
use ApiClients\Foundation\Hydrator\Hydrator;
use React\Promise\PromiseInterface;
use Rx\Observable;
use function ApiClients\Tools\Rx\unwrapObservableFromPromise;
use function React\Promise\resolve;
use function WyriHaximus\React\futureFunctionPromise;

final class OrganizationsHandler
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
     * @param Hydrator $hydrator
     */
    public function __construct(IteratePagesService $service, Hydrator $hydrator)
    {
        $this->service = $service;
        $this->hydrator = $hydrator;
    }

    /**
     * @param OrganizationsCommand $command
     * @return PromiseInterface
     */
    public function handle(OrganizationsCommand $command): PromiseInterface
    {
        return resolve(
            $this->service->iterate('users/' . $command->getLogin() . '/orgs')
                ->flatMap(function ($organizations) {
                    return Observable::fromArray($organizations);
                })->map(function ($organization) {
                    return $this->hydrator->hydrate(OrganizationInterface::HYDRATE_CLASS, $organization);
                })
        );
    }
}
