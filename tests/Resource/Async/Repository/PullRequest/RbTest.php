<?php declare(strict_types=1);

namespace ApiClients\Tests\Client\Github\Resource\Async\Repository\PullRequest;

use ApiClients\Client\Github\ApiSettings;
use ApiClients\Client\Github\Resource\Repository\PullRequest\Rb;
use ApiClients\Tools\ResourceTestUtilities\AbstractResourceTest;

class RbTest extends AbstractResourceTest
{
    public function getSyncAsync(): string
    {
        return 'Async';
    }

    public function getClass(): string
    {
        return Rb::class;
    }

    public function getNamespace(): string
    {
        return ApiSettings::NAMESPACE;
    }
}
