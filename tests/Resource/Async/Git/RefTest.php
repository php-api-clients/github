<?php declare(strict_types=1);

namespace ApiClients\Tests\Client\Github\Resource\Async\Git;

use ApiClients\Client\Github\ApiSettings;
use ApiClients\Client\Github\Resource\Git\Ref;
use ApiClients\Tools\ResourceTestUtilities\AbstractResourceTest;

/**
 * @internal
 */
class RefTest extends AbstractResourceTest
{
    public function getSyncAsync(): string
    {
        return 'Async';
    }

    public function getClass(): string
    {
        return Ref::class;
    }

    public function getNamespace(): string
    {
        return ApiSettings::NAMESPACE;
    }
}
