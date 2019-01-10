<?php declare(strict_types=1);

namespace ApiClients\Tests\Client\Github\Resource\Async\WebHook;

use ApiClients\Client\Github\ApiSettings;
use ApiClients\Client\Github\Resource\WebHook\Config;
use ApiClients\Tools\ResourceTestUtilities\AbstractResourceTest;

/**
 * @internal
 */
class ConfigTest extends AbstractResourceTest
{
    public function getSyncAsync(): string
    {
        return 'Async';
    }

    public function getClass(): string
    {
        return Config::class;
    }

    public function getNamespace(): string
    {
        return ApiSettings::NAMESPACE;
    }
}
