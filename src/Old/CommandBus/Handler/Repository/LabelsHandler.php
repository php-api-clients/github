<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\CommandBus\Handler\Repository;

use ApiClients\Client\Github\CommandBus\Command\Repository\LabelsCommand;
use ApiClients\Client\Github\Resource\LabelInterface;
use ApiClients\Client\Github\Service\IteratePagesService;
use ApiClients\Foundation\Hydrator\Hydrator;
use React\Promise\PromiseInterface;

use function ApiClients\Tools\Rx\observableFromArray;
use function React\Promise\resolve;

final class LabelsHandler
{
    private IteratePagesService $iteratePagesService;

    private Hydrator $hydrator;

    public function __construct(IteratePagesService $iteratePagesService, Hydrator $hydrator)
    {
        $this->iteratePagesService = $iteratePagesService;
        $this->hydrator            = $hydrator;
    }

    public function handle(LabelsCommand $command): PromiseInterface
    {
        return resolve(
            $this->iteratePagesService->iterate('repos/' . $command->getFullName() . '/labels')
                ->flatMap(static function ($labels) {
                    return observableFromArray($labels);
                })->map(function ($label) {
                    return $this->hydrator->hydrate(LabelInterface::HYDRATE_CLASS, $label);
                })
        );
    }
}
