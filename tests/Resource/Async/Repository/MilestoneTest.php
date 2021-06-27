<?php

declare(strict_types=1);

namespace ApiClients\Tests\Client\Github\Resource\Async\Repository;

use ApiClients\Client\Github\ApiSettings;
use ApiClients\Client\Github\Resource\Repository\Milestone;
use ApiClients\Tools\ResourceTestUtilities\AbstractResourceTest;

class MilestoneTest extends AbstractResourceTest
{
    public function getSyncAsync(): string
    {
        return 'Async';
    }

    public function getClass(): string
    {
        return Milestone::class;
    }

    public function getNamespace(): string
    {
        return ApiSettings::NAMESPACE;
    }
}
