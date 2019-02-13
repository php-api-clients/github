<?php declare(strict_types=1);

namespace ApiClients\Tests\Client\Github\Resource\Async\Git\Ref;

use ApiClients\Client\Github\ApiSettings;
use ApiClients\Client\Github\Resource\Git\Ref\Object_;
use ApiClients\Tools\ResourceTestUtilities\AbstractResourceTest;

/**
 * @internal
 */
class Object_Test extends AbstractResourceTest
{
    public function getSyncAsync(): string
    {
        return 'Async';
    }

    public function getClass(): string
    {
        return Object_::class;
    }

    public function getNamespace(): string
    {
        return ApiSettings::NAMESPACE;
    }
}
