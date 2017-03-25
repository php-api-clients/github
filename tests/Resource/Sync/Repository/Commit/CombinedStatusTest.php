<?php declare(strict_types=1);

namespace ApiClients\Tests\Client\Github\Resource\Sync\Repository\Commit;

use ApiClients\Tools\ResourceTestUtilities\AbstractResourceTest;
use ApiClients\Client\Github\ApiSettings;
use ApiClients\Client\Github\Resource\Repository\Commit\CombinedStatus;

class CombinedStatusTest extends AbstractResourceTest
{
    public function getSyncAsync() : string
    {
        return 'Sync';
    }
    public function getClass() : string
    {
        return CombinedStatus::class;
    }
    public function getNamespace() : string
    {
        return Apisettings::NAMESPACE;
    }
}
