<?php declare(strict_types=1);

namespace ApiClients\Tests\Github\CommandBus\Handler\Repository;

use ApiClients\Client\Github\CommandBus\Command\Repository\AddWebHookCommand;
use ApiClients\Client\Github\CommandBus\Handler\Repository\AddWebHookHandler;
use ApiClients\Client\Github\Resource\WebHookInterface;
use ApiClients\Foundation\Hydrator\Hydrator;
use ApiClients\Foundation\Transport\Service\RequestService;
use ApiClients\Middleware\Json\JsonStream;
use ApiClients\Tools\TestUtilities\TestCase;
use RingCentral\Psr7\Request;
use RingCentral\Psr7\Response;
use function React\Promise\resolve;

final class AddWebHookHandlerTest extends TestCase
{
    public function testCommand()
    {
        $resource = $this->prophesize(WebHookInterface::class)->reveal();
        $repository = 'repository';
        $name = 'repository';
        $config = [
            'url' => 'https://www.example.com/',
        ];
        $events = ['all'];
        $active = true;
        $webhook = [];

        $request = new Request(
            'POST',
            'repos/' . $repository . '/hooks',
            [],
            new JsonStream([
                'name'   => $name,
                'config' => $config,
                'events' => $events,
                'active' => $active,
            ])
        );
        $response = new Response(
            200,
            [],
            new JsonStream([])
        );

        $service = $this->prophesize(RequestService::class);
        $service->request($request)->shouldBeCalled()->willReturn(resolve($response));

        $hydrator = $this->prophesize(Hydrator::class);
        $hydrator->hydrate(WebHookInterface::HYDRATE_CLASS, $webhook)->shouldBeCalled()->willReturn($resource);

        $handler = new AddWebHookHandler($service->reveal(), $hydrator->reveal());
        $handler->handle(new AddWebHookCommand(
            $repository,
            $name,
            $config,
            $events,
            $active
        ));
    }
}
