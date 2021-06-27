<?php

declare(strict_types=1);

namespace ApiClients\Tests\Client\Github\Resource\Sync\Git;

use ApiClients\Client\Github\Resource\Sync\Git\EmptyBlob;
use ApiClients\Tools\ResourceTestUtilities\AbstractEmptyResourceTest;

/**
 * @internal
 */
final class EmptyBlobTest extends AbstractEmptyResourceTest
{
    public function getSyncAsync(): string
    {
        return 'Sync';
    }

    public function getClass(): string
    {
        return EmptyBlob::class;
    }
}
