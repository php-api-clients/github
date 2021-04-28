<?php declare(strict_types=1);

namespace ApiClients\Client\Github\CommandBus\Handler\Repository;

use ApiClients\Client\Github\CommandBus\Command\Repository\BranchesCommand;
use ApiClients\Client\Github\CommandBus\Command\Repository\MilestonesCommand;
use ApiClients\Client\Github\CommandBus\Command\Repository\PullRequestsCommand;
use ApiClients\Client\Github\Resource\Repository\BranchInterface;
use ApiClients\Client\Github\Resource\Repository\MilestoneInterface;
use ApiClients\Client\Github\Resource\Repository\PullRequestInterface;
use ApiClients\Client\Github\Service\IteratePagesService;
use ApiClients\Foundation\Hydrator\Hydrator;
use function ApiClients\Tools\Rx\observableFromArray;
use React\Promise\PromiseInterface;
use function React\Promise\resolve;

final class PullRequestsHandler
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
     * @param Hydrator            $hydrator
     */
    public function __construct(IteratePagesService $iteratePagesService, Hydrator $hydrator)
    {
        $this->iteratePagesService = $iteratePagesService;
        $this->hydrator = $hydrator;
    }

    /**
     * @param  PullRequestsCommand  $command
     * @return PromiseInterface
     */
    public function handle(PullRequestsCommand $command): PromiseInterface
    {
        return resolve(
            $this->iteratePagesService->iterate('repos/' . $command->getFullName() . '/pulls')
                ->flatMap(function ($milestones) {
                    return observableFromArray($milestones);
                })->map(function ($milestone) {
                    return $this->hydrator->hydrate(PullRequestInterface::HYDRATE_CLASS, $milestone);
                })
        );
    }
}
