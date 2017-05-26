<?php declare(strict_types=1);

namespace ApiClients\Tests\Client\Github\Resource\Async;

use ApiClients\Client\Github\ApiSettings;
use ApiClients\Client\Github\Resource\Url;
use ApiClients\Tools\ResourceTestUtilities\AbstractResourceTest;

class UrlTest extends AbstractResourceTest
{
    public function getSyncAsync(): string
    {
        return 'Async';
    }

    public function getClass(): string
    {
        return Url::class;
    }

    public function getNamespace(): string
    {
        return Apisettings::NAMESPACE;
    }
}
