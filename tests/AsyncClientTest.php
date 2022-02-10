<?php

declare(strict_types=1);

namespace ApiClients\Tests\Client\Github;

use ApiClients\Client\Github\AsyncClient;
use ApiClients\Client\Github\Authentication\Anonymous;
use ApiClients\Client\Github\RateLimitState;
use ApiClients\Tools\TestUtilities\TestCase;
use React\EventLoop\Factory;

/**
 * @internal
 */
final class AsyncClientTest extends TestCase
{
    public function testGetRateLimitState(): void
    {
        $loop   = Factory::create();
        $client = AsyncClient::create($loop, new Anonymous());
        self::assertInstanceOf(RateLimitState::class, $client->getRateLimitState());
    }
}
