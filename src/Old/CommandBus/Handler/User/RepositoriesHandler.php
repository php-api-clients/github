<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\CommandBus\Handler\User;

use ApiClients\Client\Github\CommandBus\Command\User\RepositoriesCommand;
use ApiClients\Client\Github\Resource\RepositoryInterface;
use ApiClients\Client\Github\Service\IteratePagesService;
use ApiClients\Foundation\Hydrator\Hydrator;
use React\Promise\PromiseInterface;

use function ApiClients\Tools\Rx\observableFromArray;
use function React\Promise\resolve;

final class RepositoriesHandler
{
    private IteratePagesService $iteratePagesService;

    private Hydrator $hydrator;

    public function __construct(IteratePagesService $iteratePagesService, Hydrator $hydrator)
    {
        $this->iteratePagesService = $iteratePagesService;
        $this->hydrator            = $hydrator;
    }

    /**
     * Fetch the given repository and hydrate it.
     */
    public function handle(RepositoriesCommand $command): PromiseInterface
    {
        return resolve(
            $this->iteratePagesService->iterate('users/' . $command->getLogin() . '/repos')
                ->flatMap(static function ($repositories) {
                    return observableFromArray($repositories);
                })->map(function ($repository) {
                    return $this->hydrator->hydrate(RepositoryInterface::HYDRATE_CLASS, $repository);
                })
        );
    }
}
