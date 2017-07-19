<?php declare(strict_types=1);

namespace ApiClients\Tests\Github\CommandBus\Handler\Repository\Contents;

use ApiClients\Client\Github\CommandBus\Command\Repository\AddLabelCommand;
use ApiClients\Client\Github\CommandBus\Command\Repository\Contents\FileUploadCommand;
use ApiClients\Client\Github\CommandBus\Handler\Repository\AddLabelHandler;
use ApiClients\Client\Github\CommandBus\Handler\Repository\Contents\FileUploadHandler;
use ApiClients\Client\Github\Resource\LabelInterface;
use ApiClients\Foundation\Hydrator\Hydrator;
use ApiClients\Foundation\Transport\Service\RequestService;
use ApiClients\Middleware\Json\JsonStream;
use ApiClients\Tools\TestUtilities\TestCase;
use React\Stream\ThroughStream;
use RingCentral\Psr7\Request;
use RingCentral\Psr7\Response;
use function React\Promise\resolve;

final class FileUploadHandlerTest extends TestCase
{
    public function provideCommands()
    {
        $stream = new ThroughStream();
        yield [
            new FileUploadCommand(
                'php-api-clients/github',
                'Commit Message',
                '/repos/php-api-clients/github/contents/dir/file.pane',
                'sha',
                'master',
                $stream
            )
        ];
    }

    public function testCommand(FileUploadCommand $command)
    {
        $requestService = $this->prophesize(RequestService::class);
        $hydrator = $this->prophesize(Hydrator::class);
        $handler = new FileUploadHandler($requestService->reveal(), $hydrator->reveal());
    }
}
