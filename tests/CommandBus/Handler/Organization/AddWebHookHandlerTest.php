<?php

declare(strict_types=1);

namespace ApiClients\Tests\Github\CommandBus\Handler\Organization;

use ApiClients\Client\Github\CommandBus\Command\Organization\AddWebHookCommand;
use ApiClients\Client\Github\CommandBus\Handler\Organization\AddWebHookHandler;
use ApiClients\Client\Github\Resource\WebHookInterface;
use ApiClients\Foundation\Hydrator\Hydrator;
use ApiClients\Foundation\Transport\Service\RequestService;
use ApiClients\Middleware\Json\JsonStream;
use ApiClients\Tools\TestUtilities\TestCase;
use RingCentral\Psr7\Request;
use RingCentral\Psr7\Response;

use function React\Promise\resolve;

/**
 * @internal
 */
final class AddWebHookHandlerTest extends TestCase
{
    public function testCommand(): void
    {
        $resource = $this->prophesize(WebHookInterface::class)->reveal();
        $org      = 'repository';
        $name     = 'repository';
        $config   = ['url' => 'https://www.example.com/'];
        $events   = ['all'];
        $active   = true;
        $webhook  = [];

        $request  = new Request(
            'POST',
            'orgs/' . $org . '/hooks',
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
            $org,
            $name,
            $config,
            $events,
            $active
        ));
    }
}
