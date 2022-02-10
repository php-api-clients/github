<?php

declare(strict_types=1);

namespace ApiClients\Tests\Client\Github;

use ApiClients\Client\Github\RateLimitState;
use ApiClients\Tools\TestUtilities\TestCase;

use function time;

/**
 * @internal
 */
final class RateLimitStateTest extends TestCase
{
    public function testUpdateState(): void
    {
        $state = new RateLimitState();
        self::assertSame(0, $state->getLimit());
        self::assertSame(0, $state->getRemaining());
        self::assertSame(0, $state->getReset());

        $state->setLimit(2);
        $state->setRemaining(1);
        $time = time();
        $state->setReset($time);
        self::assertSame(2, $state->getLimit());
        self::assertSame(1, $state->getRemaining());
        self::assertSame($time, $state->getReset());
    }
}
