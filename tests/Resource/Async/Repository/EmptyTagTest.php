<?php

declare(strict_types=1);

namespace ApiClients\Tests\Client\Github\Resource\Async\Repository;

use ApiClients\Client\Github\Resource\Async\Repository\EmptyTag;
use ApiClients\Tools\ResourceTestUtilities\AbstractEmptyResourceTest;

/**
 * @internal
 */
final class EmptyTagTest extends AbstractEmptyResourceTest
{
    public function getSyncAsync(): string
    {
        return 'Async';
    }

    public function getClass(): string
    {
        return EmptyTag::class;
    }
}
