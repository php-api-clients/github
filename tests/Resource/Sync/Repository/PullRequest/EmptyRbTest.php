<?php

declare(strict_types=1);

namespace ApiClients\Tests\Client\Github\Resource\Sync\Repository\PullRequest;

use ApiClients\Client\Github\Resource\Sync\Repository\PullRequest\EmptyRb;
use ApiClients\Tools\ResourceTestUtilities\AbstractEmptyResourceTest;

final class EmptyRbTest extends AbstractEmptyResourceTest
{
    public function getSyncAsync(): string
    {
        return 'Sync';
    }

    public function getClass(): string
    {
        return EmptyRb::class;
    }
}
