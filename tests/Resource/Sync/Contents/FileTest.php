<?php declare(strict_types=1);

namespace ApiClients\Tests\Client\Github\Resource\Sync\Contents;

use ApiClients\Client\Github\ApiSettings;
use ApiClients\Client\Github\Resource\Contents\File;
use ApiClients\Tools\ResourceTestUtilities\AbstractResourceTest;

class FileTest extends AbstractResourceTest
{
    public function getSyncAsync() : string
    {
        return 'Sync';
    }
    public function getClass() : string
    {
        return File::class;
    }
    public function getNamespace() : string
    {
        return Apisettings::NAMESPACE;
    }
}
