<?php declare(strict_types=1);

namespace ApiClients\Tests\Github\CommandBus\Handler\Repository;

use ApiClients\Client\Github\CommandBus\Command\Repository\ReplaceTopicsCommand;
use ApiClients\Client\Github\CommandBus\Handler\Repository\ReplaceTopicsHandler;
use ApiClients\Foundation\Transport\Service\RequestService;
use ApiClients\Middleware\Json\JsonStream;
use ApiClients\Tools\TestUtilities\TestCase;
use RingCentral\Psr7\Request;
use RingCentral\Psr7\Response;
use function React\Promise\resolve;

/**
 * @internal
 */
final class ReplaceTopicsHandlerTest extends TestCase
{
    public function testCommand()
    {
        $topics = [
            'foo',
            'bar',
        ];
        $repository = 'repository';
        $request = new Request(
            'PUT',
            'repos/' . $repository . '/topics',
            [],
            new JsonStream([
                'names' => $topics,
            ])
        );
        $response = new Response(
            200,
            [],
            new JsonStream([
                'names' => $topics,
            ])
        );

        $service = $this->prophesize(RequestService::class);
        $service->request($request)->shouldBeCalled()->willReturn(resolve($response));

        $handler = new ReplaceTopicsHandler($service->reveal());
        $handler->handle(new ReplaceTopicsCommand($repository, ...$topics));
    }
}
