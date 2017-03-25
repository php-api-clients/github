<?php declare(strict_types=1);

namespace ApiClients\Tests\Client\Github\Resource\Async\Contents;

use ApiClients\Tools\ResourceTestUtilities\AbstractEmptyResourceTest;
use ApiClients\Client\Github\Resource\Async\Contents\EmptyFile;

final class EmptyFileTest extends AbstractEmptyResourceTest
{
    public function getSyncAsync() : string
    {
        return 'Async';
    }
    public function getClass() : string
    {
        return EmptyFile::class;
    }
}
