<?php declare(strict_types=1);

namespace ApiClients\Client\Github\CommandBus\Handler\Repository\Commit;

use ApiClients\Client\Github\CommandBus\Command\Repository\Commit\ChecksCommand;
use ApiClients\Client\Github\Resource\Repository\Commit\CheckInterface;
use ApiClients\Client\Github\Service\IteratePagesService;
use ApiClients\Foundation\Hydrator\Hydrator;
use function ApiClients\Tools\Rx\observableFromArray;
use React\Promise\PromiseInterface;
use function React\Promise\resolve;
use function igorw\get_in;

final class ChecksHandler
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
     * @param  ChecksCommand  $command
     * @return PromiseInterface
     */
    public function handle(ChecksCommand $command): PromiseInterface
    {
        return resolve(
            $this->iteratePagesService->iterate($command->getCommit()->url() . '/check-runs',)
                ->flatMap(function ($checkRuns) {
                    return observableFromArray(get_in($checkRuns, ['check_runs'], []));
                })->map(function ($checkRun) {
                    return $this->hydrator->hydrate(CheckInterface::HYDRATE_CLASS, $checkRun);
                })
        );
    }
}
