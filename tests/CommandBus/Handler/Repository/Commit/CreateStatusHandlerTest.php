<?php declare(strict_types=1);

namespace ApiClients\Tests\Github\CommandBus\Handler\Repository\Commit;

use ApiClients\Client\Github\CommandBus\Command\Repository\Commit\CreateStatusCommand;
use ApiClients\Client\Github\CommandBus\Handler\Repository\Commit\CreateStatusHandler;
use ApiClients\Client\Github\Resource\Repository\Commit\StatusInterface;
use ApiClients\Client\Github\Resource\Repository\CommitInterface;
use ApiClients\Foundation\Hydrator\Hydrator;
use ApiClients\Foundation\Transport\Service\RequestService;
use ApiClients\Middleware\Json\JsonStream;
use ApiClients\Tools\TestUtilities\TestCase;
use RingCentral\Psr7\Request;
use RingCentral\Psr7\Response;
use function React\Promise\resolve;

final class CreateStatusHandlerTest extends TestCase
{
    public function provideCommandsAndJsonCombinations()
    {
        $commit = $this->prophesize(CommitInterface::class);
        $commit->url()->shouldBeCalled()->willReturn('repos/login/repository/commits/0123456789abcdef');

        yield [
            new CreateStatusCommand(
                $commit->reveal(),
                'error'
            ),
            [
                'state' => 'error',
            ],
        ];

        yield [
            new CreateStatusCommand(
                $commit->reveal(),
                'error',
                'https://php-api-clients.org/'
            ),
            [
                'state' => 'error',
                'target_url' => 'https://php-api-clients.org/',
            ],
        ];

        yield [
            new CreateStatusCommand(
                $commit->reveal(),
                'error',
                'https://php-api-clients.org/',
                'Floki and Deathwing sitting in the garden watching Gandalf play'
            ),
            [
                'state' => 'error',
                'target_url' => 'https://php-api-clients.org/',
                'description' => 'Floki and Deathwing sitting in the garden watching Gandalf play',
            ],
        ];

        yield [
            new CreateStatusCommand(
                $commit->reveal(),
                'error',
                'https://php-api-clients.org/',
                'Floki and Deathwing sitting in the garden watching Gandalf play',
                'PHP-API-Clients/Github'
            ),
            [
                'state' => 'error',
                'target_url' => 'https://php-api-clients.org/',
                'description' => 'Floki and Deathwing sitting in the garden watching Gandalf play',
                'context' => 'PHP-API-Clients/Github',
            ],
        ];
    }

    /**
     * @param CreateStatusCommand $command
     * @param array               $json
     *
     * @dataProvider provideCommandsAndJsonCombinations
     */
    public function testCommand(CreateStatusCommand $command, array $json)
    {
        $resource = $this->prophesize(StatusInterface::class)->reveal();
        $status = [
            'state' => 'success',
        ];

        $request = new Request(
            'POST',
            'repos/login/repository/statuses/0123456789abcdef',
            [],
            new JsonStream($json)
        );
        $response = new Response(
            200,
            [],
            new JsonStream($status)
        );

        $service = $this->prophesize(RequestService::class);
        $service->request($request)->shouldBeCalled()->willReturn(resolve($response));

        $hydrator = $this->prophesize(Hydrator::class);
        $hydrator->hydrate(StatusInterface::HYDRATE_CLASS, $status)->shouldBeCalled()->willReturn($resource);

        $handler = new CreateStatusHandler($service->reveal(), $hydrator->reveal());
        $handler->handle($command);
    }
}
