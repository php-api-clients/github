<?php declare(strict_types=1);

namespace ApiClients\Tests\Client\Github\Resource\Async\Contents;

use ApiClients\Client\Github\ApiSettings;
use ApiClients\Client\Github\Resource\Contents\Directory;
use ApiClients\Tools\ResourceTestUtilities\AbstractResourceTest;

class DirectoryTest extends AbstractResourceTest
{
    public function getSyncAsync() : string
    {
        return 'Async';
    }
    public function getClass() : string
    {
        return Directory::class;
    }
    public function getNamespace() : string
    {
        return Apisettings::NAMESPACE;
    }
}
