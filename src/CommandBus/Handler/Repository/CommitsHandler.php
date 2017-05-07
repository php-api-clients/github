<?php declare(strict_types=1);

namespace ApiClients\Client\Github\CommandBus\Handler\Repository;

use ApiClients\Client\Github\CommandBus\Command\Repository\CommitsCommand;
use ApiClients\Client\Github\Resource\Repository\CommitInterface;
use ApiClients\Client\Github\Service\IteratePagesService;
use ApiClients\Foundation\Hydrator\Hydrator;
use React\Promise\PromiseInterface;
use function ApiClients\Tools\Rx\observableFromArray;
use function React\Promise\resolve;

final class CommitsHandler
{
    /**
     * @var IteratePagesService
     */
    private $iteratePagesService;

    /**
     * @var Hydrator
     */
    private $hydrator;

    /**
     * @param IteratePagesService $iteratePagesService
     * @param Hydrator $hydrator
     */
    public function __construct(IteratePagesService $iteratePagesService, Hydrator $hydrator)
    {
        $this->iteratePagesService = $iteratePagesService;
        $this->hydrator = $hydrator;
    }

    /**
     * @param CommitsCommand $command
     * @return PromiseInterface
     */
    public function handle(CommitsCommand $command): PromiseInterface
    {
        return resolve(
            $this->iteratePagesService->iterate('repos/' . $command->getFullName() . '/commits')
                ->flatMap(function ($commits) {
                    return observableFromArray($commits);
                })->map(function ($commit) {
                    return $this->hydrator->hydrate(CommitInterface::HYDRATE_CLASS, $commit);
                })
        );
    }
}
