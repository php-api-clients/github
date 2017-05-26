<?php declare(strict_types=1);

namespace ApiClients\Tests\Client\Github\Resource\Sync\Contents;

use ApiClients\Client\Github\Resource\Sync\Contents\EmptyLinks;
use ApiClients\Tools\ResourceTestUtilities\AbstractEmptyResourceTest;

final class EmptyLinksTest extends AbstractEmptyResourceTest
{
    public function getSyncAsync(): string
    {
        return 'Sync';
    }

    public function getClass(): string
    {
        return EmptyLinks::class;
    }
}
