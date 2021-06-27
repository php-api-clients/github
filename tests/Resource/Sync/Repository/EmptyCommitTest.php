<?php

declare(strict_types=1);

namespace ApiClients\Tests\Client\Github\Resource\Sync\Repository;

use ApiClients\Client\Github\Resource\Sync\Repository\EmptyCommit;
use ApiClients\Tools\ResourceTestUtilities\AbstractEmptyResourceTest;

/**
 * @internal
 */
final class EmptyCommitTest extends AbstractEmptyResourceTest
{
    public function getSyncAsync(): string
    {
        return 'Sync';
    }

    public function getClass(): string
    {
        return EmptyCommit::class;
    }
}
