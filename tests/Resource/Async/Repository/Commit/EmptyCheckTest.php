<?php declare(strict_types=1);

namespace ApiClients\Tests\Client\Github\Resource\Async\Repository\Commit;

use ApiClients\Client\Github\Resource\Async\Repository\Commit\EmptyCheck;
use ApiClients\Tools\ResourceTestUtilities\AbstractEmptyResourceTest;

final class EmptyCheckTest extends AbstractEmptyResourceTest
{
    public function getSyncAsync(): string
    {
        return 'Async';
    }

    public function getClass(): string
    {
        return EmptyCheck::class;
    }
}
