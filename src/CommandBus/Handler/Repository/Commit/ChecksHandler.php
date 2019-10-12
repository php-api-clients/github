<?php declare(strict_types=1);

namespace ApiClients\Client\Github\CommandBus\Handler\Repository\Commit;

use ApiClients\Client\Github\CommandBus\Command\Repository\Commit\ChecksCommand;
use ApiClients\Client\Github\CommandBus\Command\Repository\Commit\StatusesCommand;
use ApiClients\Client\Github\Resource\Repository\Commit\CheckInterface;
use ApiClients\Client\Github\Resource\Repository\Commit\StatusInterface;
use ApiClients\Client\Github\Service\IteratePagesService;
use ApiClients\Foundation\Hydrator\Hydrator;
use ApiClients\Tools\Services\Client\FetchAndIterateService;
use function ApiClients\Tools\Rx\observableFromArray;
use React\Promise\PromiseInterface;
use function React\Promise\resolve;

final class ChecksHandler
{
    /**
     * @var FetchAndIterateService
     */
    private $fetchAndIterateService;

    /**
     * @var Hydrator
     */
    private $hydrator;

    /**
     * @param FetchAndIterateService $fetchAndIterateService
     * @param Hydrator            $hydrator
     */
    public function __construct(FetchAndIterateService $fetchAndIterateService, Hydrator $hydrator)
    {
        $this->fetchAndIterateService = $fetchAndIterateService;
        $this->hydrator = $hydrator;
    }

    /**
     * @param  ChecksCommand  $command
     * @return PromiseInterface
     */
    public function handle(ChecksCommand $command): PromiseInterface
    {
        return resolve(
            $this->fetchAndIterateService->iterate(
                $command->getCommit()->url() . '/check-runs',
                'check_runs',
                CheckInterface::HYDRATE_CLASS
            )
        );
    }
}
