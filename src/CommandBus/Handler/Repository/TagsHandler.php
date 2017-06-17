<?php declare(strict_types=1);

namespace ApiClients\Client\Github\CommandBus\Handler\Repository;

use ApiClients\Client\Github\CommandBus\Command\Repository\TagsCommand;
use ApiClients\Client\Github\Resource\Repository\TagInterface;
use ApiClients\Client\Github\Service\IteratePagesService;
use ApiClients\Foundation\Hydrator\Hydrator;
use React\Promise\PromiseInterface;
use function ApiClients\Tools\Rx\observableFromArray;
use function React\Promise\resolve;

final class TagsHandler
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
     * @param  TagsCommand      $command
     * @return PromiseInterface
     */
    public function handle(TagsCommand $command): PromiseInterface
    {
        return resolve(
            $this->iteratePagesService->iterate('repos/' . $command->getFullName() . '/tags')
                ->flatMap(function ($labels) {
                    return observableFromArray($labels);
                })->map(function ($label) {
                    return $this->hydrator->hydrate(TagInterface::HYDRATE_CLASS, $label);
                })
        );
    }
}
