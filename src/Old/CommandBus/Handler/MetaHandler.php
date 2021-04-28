<?php declare(strict_types=1);

namespace ApiClients\Client\Github\CommandBus\Handler;

use ApiClients\Client\Github\CommandBus\Command\MetaCommand;
use ApiClients\Client\Github\Resource\MetaInterface;
use ApiClients\Tools\Services\Client\FetchAndHydrateService;
use React\Promise\PromiseInterface;

final class MetaHandler
{
    /**
     * @var FetchAndHydrateService
     */
    private $service;

    /**
     * MetaHandler constructor.
     * @param FetchAndHydrateService $service
     */
    public function __construct(FetchAndHydrateService $service)
    {
        $this->service = $service;
    }

    /**
     * @param  MetaCommand      $command
     * @return PromiseInterface
     */
    public function handle(MetaCommand $command): PromiseInterface
    {
        return $this->service->fetch('meta', '', MetaInterface::HYDRATE_CLASS);
    }
}
