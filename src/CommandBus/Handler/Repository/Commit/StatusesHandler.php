<?php declare(strict_types=1);

namespace ApiClients\Client\Github\CommandBus\Handler\Repository\Commit;

use ApiClients\Client\Github\CommandBus\Command\Repository\Commit\StatusesCommand;
use ApiClients\Client\Github\Resource\Repository\Commit\StatusInterface;
use ApiClients\Client\Github\Service\IteratePagesService;
use ApiClients\Foundation\Hydrator\Hydrator;
use React\Promise\PromiseInterface;
use Rx\Observable;
use function ApiClients\Tools\Rx\unwrapObservableFromPromise;
use function React\Promise\resolve;
use function WyriHaximus\React\futureFunctionPromise;

final class StatusesHandler
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
     * @param StatusesCommand $command
     * @return PromiseInterface
     */
    public function handle(StatusesCommand $command): PromiseInterface
    {
        return resolve(
            $this->iteratePagesService->iterate($command->getCommit()->url() . '/statuses')
                ->flatMap(function ($statuses) {
                    return Observable::fromArray($statuses);
                })->map(function ($status) {
                    return $this->hydrator->hydrate(StatusInterface::HYDRATE_CLASS, $status);
                })
        );
    }
}
