<?php

declare(strict_types=1);

namespace ApiClients\Tests\Client\Github\Resource\Async\Git;

use ApiClients\Client\Github\Resource\Async\Git\EmptyRef;
use ApiClients\Tools\ResourceTestUtilities\AbstractEmptyResourceTest;

/**
 * @internal
 */
final class EmptyRefTest extends AbstractEmptyResourceTest
{
    public function getSyncAsync(): string
    {
        return 'Async';
    }

    public function getClass(): string
    {
        return EmptyRef::class;
    }
}
