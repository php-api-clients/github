<?php

declare(strict_types=1);

namespace ApiClients\Tests\Github\CommandBus\Handler;

use ApiClients\Client\Github\CommandBus\Command\UserCommand;
use ApiClients\Client\Github\CommandBus\Handler\UserHandler;
use ApiClients\Client\Github\Resource\UserInterface;
use ApiClients\Tools\Services\Client\FetchAndHydrateService;
use ApiClients\Tools\TestUtilities\TestCase;

/**
 * @internal
 */
final class UserHandlerTest extends TestCase
{
    public function provideUsers()
    {
        yield [
            'users/WyriHaximus',
            'WyriHaximus',
        ];

        yield [
            'user',
            '',
        ];
    }

    /**
     * @dataProvider provideUsers
     */
    public function testCommand(string $path, string $user): void
    {
        $service = $this->prophesize(FetchAndHydrateService::class);
        $service->fetch($path, '', UserInterface::HYDRATE_CLASS)->shouldBeCalled();

        $handler = new UserHandler($service->reveal());

        $handler->handle(new UserCommand($user));
    }
}
