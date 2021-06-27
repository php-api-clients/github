<?php

declare(strict_types=1);

namespace ApiClients\Tests\Github\CommandBus\Handler\WebHook;

use ApiClients\Client\Github\CommandBus\Command\DeleteCommand;
use ApiClients\Client\Github\CommandBus\Handler\DeleteHandler;
use ApiClients\Foundation\Transport\Service\RequestService;
use ApiClients\Tools\TestUtilities\TestCase;
use RingCentral\Psr7\Request;
use RingCentral\Psr7\Response;

use function React\Promise\resolve;

/**
 * @internal
 */
final class DeleteHandlerTest extends TestCase
{
    public function testCommand(): void
    {
        $url = 'url';

        $request  = new Request('DELETE', $url);
        $response = new Response(204);

        $service = $this->prophesize(RequestService::class);
        $service->request($request)->shouldBeCalled()->willReturn(resolve($response));

        $handler = new DeleteHandler($service->reveal());
        self::assertTrue($this->await($handler->handle(new DeleteCommand(
            $url
        ))));
    }

    public function testCommandError(): void
    {
        $url = 'url';

        $request  = new Request('DELETE', $url);
        $response = new Response(500);

        $service = $this->prophesize(RequestService::class);
        $service->request($request)->shouldBeCalled()->willReturn(resolve($response));

        $handler = new DeleteHandler($service->reveal());
        self::assertFalse($this->await($handler->handle(new DeleteCommand(
            $url
        ))));
    }
}
