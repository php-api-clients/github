<?php declare(strict_types=1);

namespace ApiClients\Client\Github\CommandBus\Handler\Repository\Commit;

use ApiClients\Client\Github\CommandBus\Command\Repository\Commit\StatusCommand;
use ApiClients\Client\Github\Resource\Repository\Commit\CombinedStatusInterface;
use ApiClients\Tools\Services\Client\FetchAndHydrateService;
use React\Promise\PromiseInterface;

final class StatusHandler
{
    /**
     * @var FetchAndHydrateService
     */
    private $fetchAndHydrateService;

    /**
     * StatusHandler constructor.
     * @param FetchAndHydrateService $fetchAndHydrateService
     */
    public function __construct(FetchAndHydrateService $fetchAndHydrateService)
    {
        $this->fetchAndHydrateService = $fetchAndHydrateService;
    }

    /**
     * @param StatusCommand $command
     * @return PromiseInterface
     */
    public function handle(StatusCommand $command): PromiseInterface
    {
        return $this->fetchAndHydrateService->fetch(
            $command->getCommit()->url() . '/status',
            '',
            CombinedStatusInterface::HYDRATE_CLASS
        );
    }
}
