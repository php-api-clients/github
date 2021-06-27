<?php

declare(strict_types=1);

namespace ApiClients\Tests\Github\CommandBus\Handler\Repository\Contents;

use ApiClients\Client\Github\CommandBus\Command\Repository\Contents\FileDeleteCommand;
use ApiClients\Client\Github\CommandBus\Handler\Repository\Contents\FileDeleteHandler;
use ApiClients\Client\Github\Resource\Contents\FileOperationInterface;
use ApiClients\Foundation\Hydrator\Hydrator;
use ApiClients\Foundation\Transport\Service\RequestService;
use ApiClients\Middleware\Json\JsonStream;
use ApiClients\Tools\TestUtilities\TestCase;
use React\EventLoop\Factory;
use RingCentral\Psr7\Request;
use RingCentral\Psr7\Response;

use function React\Promise\resolve;

/**
 * @internal
 */
final class FileDeleteHandlerTest extends TestCase
{
    public function provideCommands()
    {
        yield [
            new FileDeleteCommand(
                'php-api-clients/github',
                'Commit Message',
                '/repos/php-api-clients/github/contents/dir/file.pane',
                'shaaioqhduqwhuqhwiud',
                'master'
            ),
            [
                'message' => 'Commit Message',
                'sha' => 'shaaioqhduqwhuqhwiud',
                'branch' => 'master',
            ],
        ];

        yield [
            new FileDeleteCommand(
                'php-api-clients/github',
                'Commit Message',
                '/repos/php-api-clients/github/contents/dir/file.pane',
                'shaaioqhduqwhuqhwiud',
                ''
            ),
            [
                'message' => 'Commit Message',
                'sha' => 'shaaioqhduqwhuqhwiud',
            ],
        ];

        yield [
            new FileDeleteCommand(
                'php-api-clients/github',
                'Commit Message',
                '/repos/php-api-clients/github/contents/dir/file.pane',
                'shaaioqhduqwhuqhwiud'
            ),
            [
                'message' => 'Commit Message',
                'sha' => 'shaaioqhduqwhuqhwiud',
            ],
        ];
    }

    /**
     * @dataProvider provideCommands
     */
    public function testCommand(FileDeleteCommand $command, array $json): void
    {
        $resource = $this->prophesize(FileOperationInterface::class)->reveal();
        $loop     = Factory::create();

        $requestService = $this->prophesize(RequestService::class);
        $requestService->request(
            new Request(
                'DELETE',
                $command->getUrl(),
                [],
                new JsonStream($json)
            )
        )->shouldBeCalled()->willReturn(resolve(new Response(
            200,
            [],
            new JsonStream(['foo' => 'bar'])
        )));

        $hydrator = $this->prophesize(Hydrator::class);
        $hydrator->hydrate(
            FileOperationInterface::HYDRATE_CLASS,
            ['foo' => 'bar']
        )->shouldBeCalled()->willReturn($resource);

        $handler = new FileDeleteHandler($requestService->reveal(), $hydrator->reveal(), $loop);

        $result = $this->await($handler->handle($command), $loop);
        self::assertSame($resource, $result);
    }
}
