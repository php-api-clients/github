<?php

declare(strict_types=1);

namespace ApiClients\Tests\Client\Github\Resource\Sync\Repository;

use ApiClients\Client\Github\ApiSettings;
use ApiClients\Client\Github\Resource\Repository\Milestone;
use ApiClients\Tools\ResourceTestUtilities\AbstractResourceTest;

class MilestoneTest extends AbstractResourceTest
{
    public function getSyncAsync(): string
    {
        return 'Sync';
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
