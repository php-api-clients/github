<?php

declare(strict_types=1);

namespace ApiClients\Tests\Client\Github\Resource\Async\Repository;

use ApiClients\Client\Github\Resource\Async\Repository\EmptyCompare;
use ApiClients\Tools\ResourceTestUtilities\AbstractEmptyResourceTest;

final class EmptyCompareTest extends AbstractEmptyResourceTest
{
    public function getSyncAsync(): string
    {
        return 'Async';
    }

    public function getClass(): string
    {
        return EmptyCompare::class;
    }
}
