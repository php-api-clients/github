<?php

declare(strict_types=1);

namespace ApiClients\Tests\Client\Github\Resource\Async\RateLimit;

use ApiClients\Client\Github\ApiSettings;
use ApiClients\Client\Github\Resource\RateLimit\Resources;
use ApiClients\Tools\ResourceTestUtilities\AbstractResourceTest;

/**
 * @internal
 */
class ResourcesTest extends AbstractResourceTest
{
    public function getSyncAsync(): string
    {
        return 'Async';
    }

    public function getClass(): string
    {
        return Resources::class;
    }

    public function getNamespace(): string
    {
        return ApiSettings::NAMESPACE;
    }
}
