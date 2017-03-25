<?php declare(strict_types=1);

namespace ApiClients\Tests\Client\Github\Resource\Async\Repository\Commit;

use ApiClients\Tools\ResourceTestUtilities\AbstractResourceTest;
use ApiClients\Client\Github\ApiSettings;
use ApiClients\Client\Github\Resource\Repository\Commit\Status;

class StatusTest extends AbstractResourceTest
{
    public function getSyncAsync() : string
    {
        return 'Async';
    }
    public function getClass() : string
    {
        return Status::class;
    }
    public function getNamespace() : string
    {
        return Apisettings::NAMESPACE;
    }
}
