<?php declare(strict_types=1);

namespace ApiClients\Client\Github\CommandBus\Handler;

use ApiClients\Client\Github\CommandBus\Command\WatchingCommand;
use ApiClients\Client\Github\Resource\RepositoryInterface;
use ApiClients\Client\Github\Service\IteratePagesService;
use ApiClients\Foundation\Hydrator\Hydrator;
use React\Promise\PromiseInterface;
use function ApiClients\Tools\Rx\observableFromArray;
use function React\Promise\resolve;

final class WatchingHandler
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
     * @param  WatchingCommand  $command
     * @return PromiseInterface
     */
    public function handle(WatchingCommand $command): PromiseInterface
    {
        return resolve(
            $this->service->iterate('user/subscriptions')
                ->flatMap(function ($repositories) {
                    return observableFromArray($repositories);
                })->map(function ($repository) {
                    return $this->hydrator->hydrate(RepositoryInterface::HYDRATE_CLASS, $repository);
                })
        );
    }
}
