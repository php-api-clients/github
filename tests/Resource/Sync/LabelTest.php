<?php declare(strict_types=1);

namespace ApiClients\Tests\Github\Resource\Sync;

use ApiClients\Client\Github\ApiSettings;
use ApiClients\Client\Github\Resource\Label;
use ApiClients\Tools\ResourceTestUtilities\AbstractResourceTest;

class LabelTest extends AbstractResourceTest
{
    public function getSyncAsync() : string
    {
        return 'Sync';
    }
    public function getClass() : string
    {
        return Label::class;
    }
    public function getNamespace() : string
    {
        return Apisettings::NAMESPACE;
    }
}
