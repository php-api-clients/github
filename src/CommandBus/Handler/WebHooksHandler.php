<?php declare(strict_types=1);

namespace ApiClients\Client\Github\CommandBus\Handler;

use ApiClients\Client\Github\CommandBus\Command\WebHooksCommand;
use ApiClients\Client\Github\Resource\WebHookInterface;
use ApiClients\Client\Github\Service\IteratePagesService;
use ApiClients\Foundation\Hydrator\Hydrator;
use function ApiClients\Tools\Rx\observableFromArray;
use React\Promise\PromiseInterface;
use function React\Promise\resolve;

final class WebHooksHandler
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
     * @param  WebHooksCommand  $command
     * @return PromiseInterface
     */
    public function handle(WebHooksCommand $command): PromiseInterface
    {
        return resolve(
            $this->iteratePagesService->iterate($command->getPrefix() . '/' . $command->getName() . '/hooks')
                ->flatMap(function ($webHooks) {
                    return observableFromArray($webHooks);
                })->map(function ($webHook) {
                    return $this->hydrator->hydrate(WebHookInterface::HYDRATE_CLASS, $webHook);
                })
        );
    }
}
