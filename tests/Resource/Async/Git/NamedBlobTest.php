<?php

declare(strict_types=1);

namespace ApiClients\Tests\Client\Github\Resource\Async\Git;

use ApiClients\Client\Github\ApiSettings;
use ApiClients\Client\Github\Resource\Git\NamedBlob;
use ApiClients\Tools\ResourceTestUtilities\AbstractResourceTest;

/**
 * @internal
 */
class NamedBlobTest extends AbstractResourceTest
{
    public function getSyncAsync(): string
    {
        return 'Async';
    }

    public function getClass(): string
    {
        return NamedBlob::class;
    }

    public function getNamespace(): string
    {
        return ApiSettings::NAMESPACE;
    }
}
