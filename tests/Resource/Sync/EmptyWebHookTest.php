<?php

declare(strict_types=1);

namespace ApiClients\Tests\Client\Github\Resource\Sync;

use ApiClients\Client\Github\Resource\Sync\EmptyWebHook;
use ApiClients\Tools\ResourceTestUtilities\AbstractEmptyResourceTest;

/**
 * @internal
 */
final class EmptyWebHookTest extends AbstractEmptyResourceTest
{
    public function getSyncAsync(): string
    {
        return 'Sync';
    }

    public function getClass(): string
    {
        return EmptyWebHook::class;
    }
}
