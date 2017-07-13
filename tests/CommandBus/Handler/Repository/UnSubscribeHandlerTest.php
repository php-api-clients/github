<?php declare(strict_types=1);

namespace ApiClients\Tests\Github\CommandBus\Handler\Repository;

use ApiClients\Client\Github\CommandBus\Command\Repository\UnSubscribeCommand;
use ApiClients\Client\Github\CommandBus\Handler\Repository\UnSubscribeHandler;
use ApiClients\Foundation\Transport\Service\RequestService;
use ApiClients\Tools\TestUtilities\TestCase;
use RingCentral\Psr7\Request;
use function React\Promise\resolve;

final class UnSubscribeHandlerTest extends TestCase
{
    public function testCommand()
    {
        $service = $this->prophesize(RequestService::class);
        $service->request(
            new Request(
                'DELETE',
                'repos/php-api-clients/github/subscription'
            )
        )->shouldBecalled()->willReturn(resolve());
        $handler = new UnSubscribeHandler($service->reveal());
        $handler->handle(new UnSubscribeCommand('php-api-clients/github'));
    }
}
