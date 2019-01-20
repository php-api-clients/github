<?php declare(strict_types=1);

namespace ApiClients\Tests\Github\CommandBus\Handler\Repository;

use ApiClients\Client\Github\CommandBus\Command\Repository\UpdateSettingsCommand;
use ApiClients\Client\Github\CommandBus\Handler\Repository\UpdateSettingsHandler;
use ApiClients\Client\Github\Resource\LabelInterface;
use ApiClients\Client\Github\Resource\RepositoryInterface;
use ApiClients\Foundation\Hydrator\Hydrator;
use ApiClients\Foundation\Transport\Service\RequestService;
use ApiClients\Middleware\Json\JsonStream;
use ApiClients\Tools\TestUtilities\TestCase;
use function React\Promise\resolve;
use RingCentral\Psr7\Request;
use RingCentral\Psr7\Response;

/**
 * @internal
 */
final class UpdateSettingsHandlerTest extends TestCase
{
    public function testCommand()
    {
        $resource = $this->prophesize(LabelInterface::class)->reveal();
        $repository = 'repository';
        $name = 'repository';
        $settings = [
            'name' => $name,
            'homepage' => 'https://www.example.com/',
        ];

        $request = new Request(
            'PATCH',
            'repos/' . $repository,
            [],
            new JsonStream($settings)
        );
        $response = new Response(
            200,
            [],
            new JsonStream($settings)
        );

        $service = $this->prophesize(RequestService::class);
        $service->request($request)->shouldBeCalled()->willReturn(resolve($response));

        $hydrator = $this->prophesize(Hydrator::class);
        $hydrator->hydrate(RepositoryInterface::HYDRATE_CLASS, $settings)->shouldBeCalled()->willReturn($resource);

        $handler = new UpdateSettingsHandler($service->reveal(), $hydrator->reveal());
        $handler->handle(new UpdateSettingsCommand(
            $repository,
            $settings
        ));
    }
}
