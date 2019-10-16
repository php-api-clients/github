<?php declare(strict_types=1);

namespace ApiClients\Tests\Client\Github\Resource\Async\Repository\PullRequest;

use ApiClients\Client\Github\Resource\Async\Repository\PullRequest\EmptyRb;
use ApiClients\Tools\ResourceTestUtilities\AbstractEmptyResourceTest;

final class EmptyRbTest extends AbstractEmptyResourceTest
{
    public function getSyncAsync(): string
    {
        return 'Async';
    }

    public function getClass(): string
    {
        return EmptyRb::class;
    }
}
