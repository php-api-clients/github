<?php declare(strict_types=1);

namespace ApiClients\Tests\Client\Github\Resource\Sync\Repository\Commit;

use ApiClients\Tools\ResourceTestUtilities\AbstractEmptyResourceTest;
use ApiClients\Client\Github\Resource\Sync\Repository\Commit\EmptyCombinedStatus;

final class EmptyCombinedStatusTest extends AbstractEmptyResourceTest
{
    public function getSyncAsync() : string
    {
        return 'Sync';
    }
    public function getClass() : string
    {
        return EmptyCombinedStatus::class;
    }
}
