<?php

declare(strict_types=1);

namespace ApiClients\Tests\Client\Github\Resource\Sync\Repository\Commit;

use ApiClients\Client\Github\Resource\Sync\Repository\Commit\EmptyCheck;
use ApiClients\Tools\ResourceTestUtilities\AbstractEmptyResourceTest;

final class EmptyCheckTest extends AbstractEmptyResourceTest
{
    public function getSyncAsync(): string
    {
        return 'Sync';
    }

    public function getClass(): string
    {
        return EmptyCheck::class;
    }
}
