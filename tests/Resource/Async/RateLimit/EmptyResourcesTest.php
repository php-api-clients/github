<?php declare(strict_types=1);

namespace ApiClients\Tests\Client\Github\Resource\Async\RateLimit;

use ApiClients\Client\Github\Resource\Async\RateLimit\EmptyResources;
use ApiClients\Tools\ResourceTestUtilities\AbstractEmptyResourceTest;

final class EmptyResourcesTest extends AbstractEmptyResourceTest
{
    public function getSyncAsync(): string
    {
        return 'Async';
    }

    public function getClass(): string
    {
        return EmptyResources::class;
    }
}
