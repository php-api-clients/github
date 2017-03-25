<?php declare(strict_types=1);

namespace ApiClients\Tests\Client\Github\Resource\Async\Repository\Commit;

use ApiClients\Tools\ResourceTestUtilities\AbstractEmptyResourceTest;
use ApiClients\Client\Github\Resource\Async\Repository\Commit\EmptyStatus;

final class EmptyStatusTest extends AbstractEmptyResourceTest
{
    public function getSyncAsync() : string
    {
        return 'Async';
    }
    public function getClass() : string
    {
        return EmptyStatus::class;
    }
}
