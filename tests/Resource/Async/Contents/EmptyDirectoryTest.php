<?php

declare(strict_types=1);

namespace ApiClients\Tests\Client\Github\Resource\Async\Contents;

use ApiClients\Client\Github\Resource\Async\Contents\EmptyDirectory;
use ApiClients\Tools\ResourceTestUtilities\AbstractEmptyResourceTest;

/**
 * @internal
 */
final class EmptyDirectoryTest extends AbstractEmptyResourceTest
{
    public function getSyncAsync(): string
    {
        return 'Async';
    }

    public function getClass(): string
    {
        return EmptyDirectory::class;
    }
}
