<?php

declare(strict_types=1);

namespace ApiClients\Tests\Client\Github\Resource\Sync;

use ApiClients\Client\Github\Resource\Sync\EmptyMeta;
use ApiClients\Tools\ResourceTestUtilities\AbstractEmptyResourceTest;

/**
 * @internal
 */
final class EmptyMetaTest extends AbstractEmptyResourceTest
{
    public function getSyncAsync(): string
    {
        return 'Sync';
    }

    public function getClass(): string
    {
        return EmptyMeta::class;
    }
}
