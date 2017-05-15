<?php declare(strict_types=1);

namespace ApiClients\Client\Github\CommandBus\Handler;

use ApiClients\Client\Github\CommandBus\Command\RateLimitCommand;
use ApiClients\Client\Github\Resource\RateLimitInterface;
use ApiClients\Tools\Services\Client\FetchAndHydrateService;
use React\Promise\PromiseInterface;
use function React\Promise\resolve;

final class RateLimitHandler
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
     * @param  RateLimitCommand $command
     * @return PromiseInterface
     */
    public function handle(RateLimitCommand $command): PromiseInterface
    {
        return resolve(
            $this->service->fetch(
                'rate_limit',
                '',
                RateLimitInterface::HYDRATE_CLASS
            )
        );
    }
}
