<?php declare(strict_types=1);

namespace ApiClients\Client\Github\CommandBus\Handler;

use ApiClients\Client\Github\CommandBus\Command\AppCommand;
use ApiClients\Client\Github\Resource\AppInterface;
use ApiClients\Tools\Services\Client\FetchAndHydrateService;
use React\Promise\PromiseInterface;
use function React\Promise\resolve;

final class AppHandler
{
    /**
     * @var FetchAndHydrateService
     */
    private $service;

    /**
     * RateLimitHandler constructor.
     * @param FetchAndHydrateService $service
     */
    public function __construct(FetchAndHydrateService $service)
    {
        $this->service = $service;
    }

    /**
     * @param  AppCommand $command
     * @return PromiseInterface
     */
    public function handle(AppCommand $command): PromiseInterface
    {
        return resolve(
            $this->service->fetch(
                'app',
                '',
                AppInterface::HYDRATE_CLASS
            )
        );
    }
}
