<?php declare(strict_types=1);

namespace ApiClients\Tests\Github\CommandBus\Handler\Repository;

use ApiClients\Client\Github\CommandBus\Command\Repository\SubscribeCommand;
use ApiClients\Client\Github\CommandBus\Handler\Repository\SubscribeHandler;
use ApiClients\Foundation\Transport\Service\RequestService;
use ApiClients\Middleware\Json\JsonStream;
use ApiClients\Tools\TestUtilities\TestCase;
use RingCentral\Psr7\Request;
use function React\Promise\resolve;

/**
 * @internal
 */
final class SubscribeHandlerTest extends TestCase
{
    public function provideCommands()
    {
        yield [
            new SubscribeCommand('php-api-clients/github', true, true),
        ];

        yield [
            new SubscribeCommand('php-api-clients/github', true, false),
        ];

        yield [
            new SubscribeCommand('php-api-clients/github', false, true),
        ];

        yield [
            new SubscribeCommand('php-api-clients/github', false, false),
        ];
    }

    /**
     * @param SubscribeCommand $command
     * @dataProvider provideCommands
     */
    public function testCommand(SubscribeCommand $command)
    {
        $service = $this->prophesize(RequestService::class);
        $service->request(
            new Request(
                'PUT',
                'repos/' . $command->getRepository() . '/subscription',
                [],
                new JsonStream([
                    'subscribed' => $command->isSubscribed(),
                    'ignored' => $command->isIgnored(),
                ])
            )
        )->shouldBecalled()->willReturn(resolve());
        $handler = new SubscribeHandler($service->reveal());
        $handler->handle($command);
    }
}
