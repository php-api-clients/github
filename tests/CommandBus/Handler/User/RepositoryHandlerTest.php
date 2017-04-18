<?php declare(strict_types=1);

namespace ApiClients\Tests\Github\CommandBus\Handler\User;

use ApiClients\Client\Github\CommandBus\Command\User\RepositoryCommand;
use ApiClients\Client\Github\CommandBus\Handler\User\RepositoryHandler;
use ApiClients\Client\Github\Resource\RepositoryInterface;
use ApiClients\Tools\Services\Client\FetchAndHydrateService;
use ApiClients\Tools\TestUtilities\TestCase;

final class RepositoryHandlerTest extends TestCase
{
    public function testCommand()
    {
        $user = 'php-api-clients';
        $repository = 'github';

        $service = $this->prophesize(FetchAndHydrateService::class);
        $service->fetch('repos/php-api-clients/github', '', RepositoryInterface::HYDRATE_CLASS)->shouldBeCalled();

        $handler = new RepositoryHandler($service->reveal());

        $handler->handle(new RepositoryCommand($user, $repository));
    }
}
