<?php

declare(strict_types=1);

namespace ApiClients\Tests\Client\Github\Resource\Async\Repository;

use ApiClients\Client\Github\Resource\Async\Repository\EmptyCommit;
use ApiClients\Tools\ResourceTestUtilities\AbstractEmptyResourceTest;

/**
 * @internal
 */
final class EmptyCommitTest extends AbstractEmptyResourceTest
{
    public function getSyncAsync(): string
    {
        return 'Async';
    }

    public function getClass(): string
    {
        return EmptyCommit::class;
    }
}
