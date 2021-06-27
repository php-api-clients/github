<?php

declare(strict_types=1);

namespace ApiClients\Tests\Client\Github\Resource\Sync\Repository;

use ApiClients\Client\Github\Resource\Sync\Repository\EmptyPullRequest;
use ApiClients\Tools\ResourceTestUtilities\AbstractEmptyResourceTest;

final class EmptyPullRequestTest extends AbstractEmptyResourceTest
{
    public function getSyncAsync(): string
    {
        return 'Sync';
    }

    public function getClass(): string
    {
        return EmptyPullRequest::class;
    }
}
