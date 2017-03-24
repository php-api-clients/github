<?php declare(strict_types=1);

namespace ApiClients\Tests\Github\CommandBus\Handler;

use ApiClients\Client\Github\CommandBus\Command\RefreshCommand;
use ApiClients\Client\Github\CommandBus\Handler\RefreshHandler;
use ApiClients\Foundation\Resource\ResourceInterface;
use ApiClients\Tools\Services\Client\FetchAndHydrateService;
use ApiClients\Tools\TestUtilities\TestCase;
use function React\Promise\resolve;

final class RefreshHandlerTest extends TestCase
{
    public function testCommand()
    {
        $resource = new class () implements ResourceInterface {
            const HYDRATE_CLASS = 'foo.bar';

            public function url(): string
            {
                return 'https://example.com/';
            }
        };
        $command = new RefreshCommand($resource);

        $service = $this->prophesize(FetchAndHydrateService::class);
        $service->fetch('https://example.com/', '', 'foo.bar')->shouldBeCalled()->willReturn(resolve(true));

        $handler = new RefreshHandler($service->reveal());

        self::assertTrue($this->await($handler->handle($command)));
    }
}
