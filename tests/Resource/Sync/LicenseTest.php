<?php declare(strict_types=1);

namespace ApiClients\Tests\Client\Github\Resource\Sync;

use ApiClients\Client\Github\ApiSettings;
use ApiClients\Client\Github\Resource\License;
use ApiClients\Tools\ResourceTestUtilities\AbstractResourceTest;

class LicenseTest extends AbstractResourceTest
{
    public function getSyncAsync(): string
    {
        return 'Sync';
    }

    public function getClass(): string
    {
        return License::class;
    }

    public function getNamespace(): string
    {
        return Apisettings::NAMESPACE;
    }
}
