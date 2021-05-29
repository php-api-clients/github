<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\CommandBus\Handler\Repository;

use ApiClients\Client\Github\CommandBus\Command\Repository\RefsCommand;
use ApiClients\Client\Github\Resource\Git\RefInterface;
use ApiClients\Client\Github\Service\IteratePagesService;
use ApiClients\Foundation\Hydrator\Hydrator;
use React\Promise\PromiseInterface;

use function ApiClients\Tools\Rx\observableFromArray;
use function React\Promise\resolve;

final class RefsHandler
{
    private IteratePagesService $iteratePagesService;

    private Hydrator $hydrator;

    public function __construct(IteratePagesService $iteratePagesService, Hydrator $hydrator)
    {
        $this->iteratePagesService = $iteratePagesService;
        $this->hydrator            = $hydrator;
    }

    public function handle(RefsCommand $command): PromiseInterface
    {
        $namespace = ! empty($command->getNamespace()) ? '/' . $command->getNamespace() : '';

        return resolve(
            $this->iteratePagesService->iterate('repos/' . $command->getFullName() . '/git/refs' . $namespace)
                ->flatMap(static function ($commits) {
                    return observableFromArray($commits);
                })->map(function ($commit) {
                    return $this->hydrator->hydrate(RefInterface::HYDRATE_CLASS, $commit);
                })
        );
    }
}
