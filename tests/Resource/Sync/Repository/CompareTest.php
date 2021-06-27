<?php

declare(strict_types=1);

namespace ApiClients\Tests\Client\Github\Resource\Sync\Repository;

use ApiClients\Client\Github\ApiSettings;
use ApiClients\Client\Github\Resource\Repository\Compare;
use ApiClients\Tools\ResourceTestUtilities\AbstractResourceTest;

class CompareTest extends AbstractResourceTest
{
    public function getSyncAsync(): string
    {
        return 'Sync';
    }

    public function getClass(): string
    {
        return Compare::class;
    }

    public function getNamespace(): string
    {
        return ApiSettings::NAMESPACE;
    }
}
