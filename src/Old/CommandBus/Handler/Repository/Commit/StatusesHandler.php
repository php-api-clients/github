<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\CommandBus\Handler\Repository\Commit;

use ApiClients\Client\Github\CommandBus\Command\Repository\Commit\StatusesCommand;
use ApiClients\Client\Github\Resource\Repository\Commit\StatusInterface;
use ApiClients\Client\Github\Service\IteratePagesService;
use ApiClients\Foundation\Hydrator\Hydrator;
use React\Promise\PromiseInterface;

use function ApiClients\Tools\Rx\observableFromArray;
use function React\Promise\resolve;

final class StatusesHandler
{
    private IteratePagesService $iteratePagesService;

    private Hydrator $hydrator;

    public function __construct(IteratePagesService $iteratePagesService, Hydrator $hydrator)
    {
        $this->iteratePagesService = $iteratePagesService;
        $this->hydrator            = $hydrator;
    }

    public function handle(StatusesCommand $command): PromiseInterface
    {
        return resolve(
            $this->iteratePagesService->iterate($command->getCommit()->url() . '/statuses')
                ->flatMap(static function ($statuses) {
                    return observableFromArray($statuses);
                })->map(function ($status) {
                    return $this->hydrator->hydrate(StatusInterface::HYDRATE_CLASS, $status);
                })
        );
    }
}
