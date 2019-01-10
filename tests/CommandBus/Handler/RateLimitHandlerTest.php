<?php declare(strict_types=1);

namespace ApiClients\Tests\Github\CommandBus\Handler;

use ApiClients\Client\Github\CommandBus\Command\RateLimitCommand;
use ApiClients\Client\Github\CommandBus\Handler\RateLimitHandler;
use ApiClients\Client\Github\Resource\RateLimitInterface;
use ApiClients\Tools\Services\Client\FetchAndHydrateService;
use ApiClients\Tools\TestUtilities\TestCase;
use function React\Promise\resolve;

/**
 * @internal
 */
final class RateLimitHandlerTest extends TestCase
{
    public function testCommand()
    {
        $rateLimit = $this->prophesize(RateLimitInterface::class)->reveal();

        $service = $this->prophesize(FetchAndHydrateService::class);
        $service->fetch('rate_limit', '', RateLimitInterface::HYDRATE_CLASS)->shouldBeCalled()->willReturn(resolve($rateLimit));

        $handler = new RateLimitHandler($service->reveal());

        self::assertSame($rateLimit, $this->await($handler->handle(new RateLimitCommand())));
    }
}
