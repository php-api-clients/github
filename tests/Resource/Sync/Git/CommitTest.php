<?php

declare(strict_types=1);

namespace ApiClients\Tests\Client\Github\Resource\Sync\Git;

use ApiClients\Client\Github\ApiSettings;
use ApiClients\Client\Github\Resource\Git\Commit;
use ApiClients\Tools\ResourceTestUtilities\AbstractResourceTest;

/**
 * @internal
 */
class CommitTest extends AbstractResourceTest
{
    public function getSyncAsync(): string
    {
        return 'Sync';
    }

    public function getClass(): string
    {
        return Commit::class;
    }

    public function getNamespace(): string
    {
        return ApiSettings::NAMESPACE;
    }
}
