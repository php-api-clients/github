<?php declare(strict_types=1);

namespace ApiClients\Tests\Client\Github\Resource\Sync;

use ApiClients\Client\Github\ApiSettings;
use ApiClients\Client\Github\Resource\WebHook;
use ApiClients\Tools\ResourceTestUtilities\AbstractResourceTest;

class WebHookTest extends AbstractResourceTest
{
    public function getSyncAsync(): string
    {
        return 'Sync';
    }

    public function getClass(): string
    {
        return WebHook::class;
    }

    public function getNamespace(): string
    {
        return ApiSettings::NAMESPACE;
    }
}