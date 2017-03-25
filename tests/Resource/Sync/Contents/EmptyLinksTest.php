<?php declare(strict_types=1);

namespace ApiClients\Tests\Client\Github\Resource\Sync\Contents;

use ApiClients\Tools\ResourceTestUtilities\AbstractEmptyResourceTest;
use ApiClients\Client\Github\Resource\Sync\Contents\EmptyLinks;

final class EmptyLinksTest extends AbstractEmptyResourceTest
{
    public function getSyncAsync() : string
    {
        return 'Sync';
    }
    public function getClass() : string
    {
        return EmptyLinks::class;
    }
}
