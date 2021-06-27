<?php

declare(strict_types=1);

namespace ApiClients\Tests\Github\CommandBus\Handler\Repository;

use ApiClients\Client\Github\CommandBus\Command\Repository\ContentsCommand;
use ApiClients\Client\Github\CommandBus\Handler\Repository\ContentsHandler;
use ApiClients\Client\Github\Resource\Contents\DirectoryInterface;
use ApiClients\Client\Github\Resource\Contents\FileInterface;
use ApiClients\Foundation\Hydrator\Hydrator;
use ApiClients\Foundation\Transport\Service\RequestService;
use ApiClients\Middleware\Json\JsonStream;
use ApiClients\Tools\TestUtilities\TestCase;
use RingCentral\Psr7\Request;
use RingCentral\Psr7\Response;
use Rx\React\Promise;

use function ApiClients\Tools\Rx\unwrapObservableFromPromise;
use function React\Promise\resolve;

/**
 * @internal
 */
final class ContentsHandlerTest extends TestCase
{
    public function pathsProvider()
    {
        yield ['', '/contents/'];
        yield ['/', '/contents/'];
        yield ['/README.md', '/contents/README.md'];
    }

    /**
     * @dataProvider pathsProvider
     */
    public function testCommand(string $path, string $uriPath): void
    {
        $repositoryFullName = 'php-api-clients/github';
        $file               = [
            'type' => 'file',
            'repository_fullname' => $repositoryFullName,
        ];
        $directory          = [
            'type' => 'directory',
            'repository_fullname' => $repositoryFullName,
        ];
        $contents           = [
            $directory,
            $file,
        ];

        $request  = new Request(
            'GET',
            'repos/' . $repositoryFullName . $uriPath
        );
        $response = new Response(
            200,
            [],
            new JsonStream($contents)
        );

        $service = $this->prophesize(RequestService::class);
        $service->request($request)->shouldBeCalled()->willReturn(resolve($response));

        $hydrator = $this->prophesize(Hydrator::class);
        $hydrator->hydrate(DirectoryInterface::HYDRATE_CLASS, $directory)->shouldBeCalled()->willReturn($this->prophesize(DirectoryInterface::class)->reveal());
        $hydrator->hydrate(FileInterface::HYDRATE_CLASS, $file)->shouldBeCalled()->willReturn($this->prophesize(FileInterface::class)->reveal());

        $handler = new ContentsHandler($service->reveal(), $hydrator->reveal());
        Promise::fromObservable(unwrapObservableFromPromise($handler->handle(new ContentsCommand($repositoryFullName, $path))));
    }
}
