<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\CommandBus\Handler\Repository\Commit;

use ApiClients\Client\Github\CommandBus\Command\Repository\Commit\ChecksCommand;
use ApiClients\Client\Github\Resource\Repository\Commit\CheckInterface;
use ApiClients\Foundation\Hydrator\Hydrator;
use ApiClients\Tools\Services\Client\FetchAndIterateService;
use React\Promise\PromiseInterface;

use function React\Promise\resolve;

final class ChecksHandler
{
    private FetchAndIterateService $fetchAndIterateService;

    private Hydrator $hydrator;

    public function __construct(FetchAndIterateService $fetchAndIterateService, Hydrator $hydrator)
    {
        $this->fetchAndIterateService = $fetchAndIterateService;
        $this->hydrator               = $hydrator;
    }

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
