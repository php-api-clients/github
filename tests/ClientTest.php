<?php declare(strict_types=1);

namespace ApiClients\Tests\Client\Github;

use ApiClients\Client\Github\Authentication\Anonymous;
use ApiClients\Client\Github\Client;
use ApiClients\Client\Github\RateLimitState;
use ApiClients\Tools\TestUtilities\TestCase;

final class ClientTest extends TestCase
{
    public function testGetRateLimitState()
    {
        $client = Client::create(new Anonymous());
        self::assertInstanceOf(RateLimitState::class, $client->getRateLimitState());
    }
}
