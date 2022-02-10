<?php

declare(strict_types=1);

namespace ApiClients\Tests\Client\Github;

use ApiClients\Client\Github\Middleware\RateLimitStateMiddleware;
use ApiClients\Client\Github\RateLimitState;
use ApiClients\Tools\TestUtilities\TestCase;
use RingCentral\Psr7\Response;

use function time;

/**
 * @internal
 */
final class RateLimitStateMiddlewareTest extends TestCase
{
    public function testPost(): void
    {
        $time  = time();
        $state = new RateLimitState();
        self::assertSame(0, $state->getLimit());
        self::assertSame(0, $state->getRemaining());
        self::assertSame(0, $state->getReset());

        $middleware = new RateLimitStateMiddleware($state);

        $middleware->post(new Response(200, ['X-RateLimit-Limit' => '2']), 'abc');
        self::assertSame(2, $state->getLimit());

        $middleware->post(new Response(200, ['X-RateLimit-Remaining' => '1']), 'abc');

        self::assertSame(1, $state->getRemaining());

        $middleware->post(new Response(200, ['X-RateLimit-Reset' => $time]), 'abc');
        self::assertSame($time, $state->getReset());
    }
}
