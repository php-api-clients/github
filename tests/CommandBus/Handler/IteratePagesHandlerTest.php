<?php declare(strict_types=1);

namespace ApiClients\Tests\Github\CommandBus\Handler;

use ApiClients\Client\Github\CommandBus\Command\IteratePagesCommand;
use ApiClients\Client\Github\CommandBus\Handler\IteratePagesHandler;
use ApiClients\Client\Github\Service\IteratePagesService;
use ApiClients\Tools\TestUtilities\TestCase;

/**
 * @internal
 */
final class IteratePagesHandlerTest extends TestCase
{
    public function testCommand()
    {
        $path = 'path';

        $service = $this->prophesize(IteratePagesService::class);
        $service->iterate($path)->shouldBeCalled();

        $handler = new IteratePagesHandler($service->reveal());
        $handler->handle(new IteratePagesCommand($path));
    }
}
