<?php declare(strict_types=1);

namespace ApiClients\Client\Github;

use ApiClients\Client\Github\Authentication\Anonymous;
use ApiClients\Tools\TestUtilities\TestCase;
use React\EventLoop\Factory;

final class AsyncClientTest extends TestCase
{
    public function testGetRateLimitState()
    {
        $loop = Factory::create();
        $client = AsyncClient::create($loop, new Anonymous());
        self::assertInstanceOf(RateLimitState::class, $client->getRateLimitState());
    }
}
