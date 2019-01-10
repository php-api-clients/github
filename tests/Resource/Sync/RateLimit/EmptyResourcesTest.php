<?php declare(strict_types=1);

namespace ApiClients\Tests\Client\Github\Resource\Sync\RateLimit;

use ApiClients\Client\Github\Resource\Sync\RateLimit\EmptyResources;
use ApiClients\Tools\ResourceTestUtilities\AbstractEmptyResourceTest;

/**
 * @internal
 */
final class EmptyResourcesTest extends AbstractEmptyResourceTest
{
    public function getSyncAsync(): string
    {
        return 'Sync';
    }

    public function getClass(): string
    {
        return EmptyResources::class;
    }
}
