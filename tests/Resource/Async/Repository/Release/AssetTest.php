<?php

declare(strict_types=1);

namespace ApiClients\Tests\Client\Github\Resource\Async\Repository\Release;

use ApiClients\Client\Github\ApiSettings;
use ApiClients\Client\Github\Resource\Repository\Release\Asset;
use ApiClients\Tools\ResourceTestUtilities\AbstractResourceTest;

/**
 * @internal
 */
class AssetTest extends AbstractResourceTest
{
    public function getSyncAsync(): string
    {
        return 'Async';
    }

    public function getClass(): string
    {
        return Asset::class;
    }

    public function getNamespace(): string
    {
        return ApiSettings::NAMESPACE;
    }
}
