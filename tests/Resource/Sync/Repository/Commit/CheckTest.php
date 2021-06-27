<?php

declare(strict_types=1);

namespace ApiClients\Tests\Client\Github\Resource\Sync\Repository\Commit;

use ApiClients\Client\Github\ApiSettings;
use ApiClients\Client\Github\Resource\Repository\Commit\Check;
use ApiClients\Tools\ResourceTestUtilities\AbstractResourceTest;

class CheckTest extends AbstractResourceTest
{
    public function getSyncAsync(): string
    {
        return 'Sync';
    }

    public function getClass(): string
    {
        return Check::class;
    }

    public function getNamespace(): string
    {
        return ApiSettings::NAMESPACE;
    }
}
