<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\CommandBus\Handler;

use ApiClients\Client\Github\CommandBus\Command\WebHooksCommand;
use ApiClients\Client\Github\Resource\WebHookInterface;
use ApiClients\Client\Github\Service\IteratePagesService;
use ApiClients\Foundation\Hydrator\Hydrator;
use React\Promise\PromiseInterface;

use function ApiClients\Tools\Rx\observableFromArray;
use function React\Promise\resolve;

final class WebHooksHandler
{
    private IteratePagesService $iteratePagesService;

    private Hydrator $hydrator;

    public function __construct(IteratePagesService $iteratePagesService, Hydrator $hydrator)
    {
        $this->iteratePagesService = $iteratePagesService;
        $this->hydrator            = $hydrator;
    }

    public function handle(WebHooksCommand $command): PromiseInterface
    {
        return resolve(
            $this->iteratePagesService->iterate($command->getPrefix() . '/' . $command->getName() . '/hooks')
                ->flatMap(static function ($webHooks) {
                    return observableFromArray($webHooks);
                })->map(function ($webHook) {
                    return $this->hydrator->hydrate(WebHookInterface::HYDRATE_CLASS, $webHook);
                })
        );
    }
}
