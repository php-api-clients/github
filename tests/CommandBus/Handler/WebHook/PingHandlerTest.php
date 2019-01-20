<?php declare(strict_types=1);

namespace ApiClients\Tests\Github\CommandBus\Handler\WebHook;

use ApiClients\Client\Github\CommandBus\Command\WebHook\PingCommand;
use ApiClients\Client\Github\CommandBus\Handler\WebHook\PingHandler;
use ApiClients\Foundation\Transport\Service\RequestService;
use ApiClients\Tools\TestUtilities\TestCase;
use function React\Promise\resolve;
use RingCentral\Psr7\Request;
use RingCentral\Psr7\Response;

/**
 * @internal
 */
final class PingHandlerTest extends TestCase
{
    public function testCommand()
    {
        $url = 'url';

        $request = new Request('POST', $url);
        $response = new Response(204);

        $service = $this->prophesize(RequestService::class);
        $service->request($request)->shouldBeCalled()->willReturn(resolve($response));

        $handler = new PingHandler($service->reveal());
        self::assertTrue($this->await($handler->handle(new PingCommand(
            $url
        ))));
    }

    public function testCommandError()
    {
        $url = 'url';

        $request = new Request('POST', $url);
        $response = new Response(500);

        $service = $this->prophesize(RequestService::class);
        $service->request($request)->shouldBeCalled()->willReturn(resolve($response));

        $handler = new PingHandler($service->reveal());
        self::assertFalse($this->await($handler->handle(new PingCommand(
            $url
        ))));
    }
}
