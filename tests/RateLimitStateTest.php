<?php declare(strict_types=1);

namespace ApiClients\Client\Github;

use ApiClients\Foundation\Transport\ClientInterface;
use ApiClients\Foundation\Transport\JsonStream;
use ApiClients\Foundation\Transport\Service\RequestService;
use ApiClients\Tools\TestUtilities\TestCase;
use Prophecy\Argument;
use RingCentral\Psr7\Request;
use RingCentral\Psr7\Response;
use function React\Promise\resolve;
use Rx\Testing\TestScheduler;

final class RateLimitStateTest extends TestCase
{
    public function testUpdateState()
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
