<?php declare(strict_types=1);

namespace ApiClients\Client\Github\CommandBus\Handler;

use ApiClients\Client\Github\CommandBus\Command\IteratePagesCommand;
use ApiClients\Client\Github\Service\IteratePagesService;
use React\Promise\CancellablePromiseInterface;
use function React\Promise\resolve;

final class IteratePagesHandler
{
    /**
     * @var IteratePagesService
     */
    private $service;

    /**
     * @param IteratePagesService $service
     */
    public function __construct(IteratePagesService $service)
    {
        $this->service = $service;
    }

    public function handle(IteratePagesCommand $command): CancellablePromiseInterface
    {
        return resolve($this->service->iterate($command->getPath()));
    }
}
