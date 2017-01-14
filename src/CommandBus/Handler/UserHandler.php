<?php declare(strict_types=1);

namespace ApiClients\Client\Github\CommandBus\Handler;

use ApiClients\Client\Github\CommandBus\Command\UserCommand;
use ApiClients\Client\Github\Resource\UserInterface;
use ApiClients\Tools\Services\Client\FetchAndHydrateService;
use React\Promise\PromiseInterface;
use function React\Promise\resolve;
use function WyriHaximus\React\futureFunctionPromise;

final class UserHandler
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
     * @param UserCommand $command
     * @return PromiseInterface
     */
    public function handle(UserCommand $command): PromiseInterface
    {
        $user = $command->getUser();

        if (strlen($user) > 0) {
            return $this->service->handle('users/' . $user, '', UserInterface::HYDRATE_CLASS);
        }

        return $this->service->handle('user', '', UserInterface::HYDRATE_CLASS);
    }
}
