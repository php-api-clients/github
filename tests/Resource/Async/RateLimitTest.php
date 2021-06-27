<?php

declare(strict_types=1);

namespace ApiClients\Tests\Client\Github\Resource\Async;

use ApiClients\Client\Github\ApiSettings;
use ApiClients\Client\Github\Resource\RateLimit;
use ApiClients\Tools\ResourceTestUtilities\AbstractResourceTest;

/**
 * @internal
 */
class RateLimitTest extends AbstractResourceTest
{
    public function getSyncAsync(): string
    {
        return 'Async';
    }

    public function getClass(): string
    {
        return RateLimit::class;
    }

    public function getNamespace(): string
    {
        return ApiSettings::NAMESPACE;
    }
}
