<?php declare(strict_types=1);

namespace ApiClients\Client\Github\CommandBus\Handler\User;

use ApiClients\Client\Github\CommandBus\Command\User\RepositoryCommand;
use ApiClients\Client\Github\Resource\RepositoryInterface;
use ApiClients\Tools\Services\Client\FetchAndHydrateService;
use React\Promise\PromiseInterface;

final class RepositoryHandler
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
     * Fetch the given repository and hydrate it
     *
     * @param RepositoryCommand $command
     * @return PromiseInterface
     */
    public function handle(RepositoryCommand $command): PromiseInterface
    {
        return $this->service->fetch(
            'repos/' . $command->getOwner() . '/' . $command->getRepository(),
            '',
            RepositoryInterface::HYDRATE_CLASS
        );
    }
}
