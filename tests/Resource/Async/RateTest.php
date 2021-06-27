<?php

declare(strict_types=1);

namespace ApiClients\Tests\Client\Github\Resource\Async;

use ApiClients\Client\Github\ApiSettings;
use ApiClients\Client\Github\Resource\Rate;
use ApiClients\Tools\ResourceTestUtilities\AbstractResourceTest;

/**
 * @internal
 */
class RateTest extends AbstractResourceTest
{
    public function getSyncAsync(): string
    {
        return 'Async';
    }

    public function getClass(): string
    {
        return Rate::class;
    }

    public function getNamespace(): string
    {
        return ApiSettings::NAMESPACE;
    }
}
