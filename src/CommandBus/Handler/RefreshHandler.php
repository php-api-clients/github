<?php declare(strict_types=1);

namespace ApiClients\Client\Github\CommandBus\Handler;

use ApiClients\Client\Github\CommandBus\Command\RefreshCommand;
use ApiClients\Client\Github\CommandBus\Command\UserCommand;
use ApiClients\Client\Github\Resource\UserInterface;
use ApiClients\Tools\Services\Client\FetchAndHydrateService;
use React\Promise\PromiseInterface;
use function React\Promise\resolve;
use function WyriHaximus\React\futureFunctionPromise;

final class RefreshHandler
{
    /**
     * @var FetchAndHydrateService
     */
    private $service;

    /**
     * @param FetchAndHydrateService $service
     */
    public function __construct(FetchAndHydrateService $service)
    {
        $this->service = $service;
    }

    /**
     * @param RefreshCommand $command
     * @return PromiseInterface
     */
    public function handle(RefreshCommand $command): PromiseInterface
    {
        $resource = $command->getResource();

        return $this->service->handle($resource->url(), '', $resource::HYDRATE_CLASS);
    }
}
