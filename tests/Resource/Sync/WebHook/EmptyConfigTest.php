<?php

declare(strict_types=1);

namespace ApiClients\Tests\Client\Github\Resource\Sync\WebHook;

use ApiClients\Client\Github\Resource\Sync\WebHook\EmptyConfig;
use ApiClients\Tools\ResourceTestUtilities\AbstractEmptyResourceTest;

/**
 * @internal
 */
final class EmptyConfigTest extends AbstractEmptyResourceTest
{
    public function getSyncAsync(): string
    {
        return 'Sync';
    }

    public function getClass(): string
    {
        return EmptyConfig::class;
    }
}
