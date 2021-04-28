<?php declare(strict_types=1);

namespace ApiClients\Client\Github\CommandBus\Handler\Repository;

use ApiClients\Client\Github\CommandBus\Command\Repository\DetailedCommitCommand;
use ApiClients\Client\Github\Resource\Repository\CommitInterface;
use ApiClients\Tools\Services\Client\FetchAndHydrateService;
use React\Promise\PromiseInterface;

final class DetailedCommitHandler
{
    /**
     * @var FetchAndHydrateService
     */
    private $fetchAndHydrateService;

    /**
     * @param FetchAndHydrateService $fetchAndHydrateService
     */
    public function __construct(FetchAndHydrateService $fetchAndHydrateService)
    {
        $this->fetchAndHydrateService = $fetchAndHydrateService;
    }

    /**
     * @param  DetailedCommitCommand $command
     * @return PromiseInterface
     */
    public function handle(DetailedCommitCommand $command): PromiseInterface
    {
        return $this->fetchAndHydrateService->fetch(
            'repos/' . $command->getFullName() . '/commits/' . $command->getSha(),
            '',
            CommitInterface::HYDRATE_CLASS
        );
    }
}
