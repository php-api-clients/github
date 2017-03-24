<?php declare(strict_types=1);

namespace ApiClients\Client\Github\CommandBus\Handler\Repository;

use ApiClients\Client\Github\CommandBus\Command\Repository\BranchesCommand;
use ApiClients\Client\Github\Resource\Repository\BranchInterface;
use ApiClients\Client\Github\Service\IteratePagesService;
use ApiClients\Foundation\Hydrator\Hydrator;
use React\Promise\PromiseInterface;
use Rx\Observable;
use function ApiClients\Tools\Rx\unwrapObservableFromPromise;
use function React\Promise\resolve;
use function WyriHaximus\React\futureFunctionPromise;

final class BranchesHandler
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
     * @param BranchesCommand $command
     * @return PromiseInterface
     */
    public function handle(BranchesCommand $command): PromiseInterface
    {
        return resolve(
            $this->iteratePagesService->iterate('repos/' . $command->getFullName() . '/branches')
                ->flatMap(function ($labels) {
                    return Observable::fromArray($labels);
                })->map(function ($label) {
                    return $this->hydrator->hydrate(BranchInterface::HYDRATE_CLASS, $label);
                })
        );
    }
}
