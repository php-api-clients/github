<?php declare(strict_types=1);

namespace ApiClients\Tests\Github\CommandBus\Handler;

use ApiClients\Client\Github\CommandBus\Command\SaveCommand;
use ApiClients\Client\Github\CommandBus\Handler\SaveHandler;
use ApiClients\Client\Github\Resource\OrganizationInterface;
use ApiClients\Foundation\Hydrator\Hydrator;
use ApiClients\Foundation\Resource\ResourceInterface;
use ApiClients\Foundation\Transport\Service\RequestService;
use ApiClients\Middleware\Json\JsonStream;
use ApiClients\Tools\TestUtilities\TestCase;
use function React\Promise\resolve;
use RingCentral\Psr7\Request;
use RingCentral\Psr7\Response;

/**
 * @internal
 */
final class SaveHandlerTest extends TestCase
{
    public function testCommand()
    {
        $url = 'url';
        $data = [];

        $request = new Request(
            'PATCH',
            $url,
            [],
            new JsonStream($data)
        );
        $response = new Response(
            200,
            [],
            new JsonStream($data)
        );

        $resource = $this->prophesize(ResourceInterface::class)->reveal();

        $service = $this->prophesize(RequestService::class);
        $service->request($request)->shouldBeCalled()->willReturn(resolve($response));

        $hydrator = $this->prophesize(Hydrator::class);
        $hydrator->hydrate(OrganizationInterface::HYDRATE_CLASS, $data)->shouldBeCalled()->willReturn($resource);

        $handler = new SaveHandler($service->reveal(), $hydrator->reveal());
        $handler->handle(new SaveCommand(
            OrganizationInterface::HYDRATE_CLASS,
            $data,
            $url
        ));
    }
}
