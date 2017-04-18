<?php declare(strict_types=1);

namespace ApiClients\Tests\Github\CommandBus\Handler\Repository;

use ApiClients\Client\Github\CommandBus\Command\Repository\AddLabelCommand;
use ApiClients\Client\Github\CommandBus\Handler\Repository\AddLabelHandler;
use ApiClients\Client\Github\Resource\LabelInterface;
use ApiClients\Foundation\Hydrator\Hydrator;
use ApiClients\Foundation\Transport\Service\RequestService;
use ApiClients\Middleware\Json\JsonStream;
use ApiClients\Tools\TestUtilities\TestCase;
use RingCentral\Psr7\Request;
use RingCentral\Psr7\Response;
use function React\Promise\resolve;

final class AddLabelHandlerTest extends TestCase
{
    public function testCommand()
    {
        $resource = $this->prophesize(LabelInterface::class)->reveal();
        $repository = 'repository';
        $name = 'repository';
        $colour = 'repository';
        $label = [
            'name' => $name,
            'colour' => $colour,
        ];

        $request = new Request(
            'POST',
            'repos/' . $repository . '/labels',
            [],
            new JsonStream([
                'name' => $name,
                'color' => $colour,
            ])
        );
        $response = new Response(
            200,
            [],
            new JsonStream($label)
        );

        $service = $this->prophesize(RequestService::class);
        $service->request($request)->shouldBeCalled()->willReturn(resolve($response));

        $hydrator = $this->prophesize(Hydrator::class);
        $hydrator->hydrate(LabelInterface::HYDRATE_CLASS, $label)->shouldBeCalled()->willReturn($resource);

        $handler = new AddLabelHandler($service->reveal(), $hydrator->reveal());
        $handler->handle(new AddLabelCommand(
            $repository,
            $name,
            $colour
        ));
    }
}
