<?php declare(strict_types=1);

namespace ApiClients\Client\Github;

use ApiClients\Client\Github\Authentication\Anonymous;
use ApiClients\Tools\TestUtilities\TestCase;

final class ClientTest extends TestCase
{
    public function testGetRateLimitState()
    {
        $client = Client::create(new Anonymous());
        self::assertInstanceOf(RateLimitState::class, $client->getRateLimitState());
    }
}
