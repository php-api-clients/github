<?php

declare(strict_types=1);

namespace ApiClients\Tests\Client\Github\Resource\Async\Contents;

use ApiClients\Client\Github\Resource\Async\Contents\EmptyFileOperation;
use ApiClients\Tools\ResourceTestUtilities\AbstractEmptyResourceTest;

/**
 * @internal
 */
final class EmptyFileOperationTest extends AbstractEmptyResourceTest
{
    public function getSyncAsync(): string
    {
        return 'Async';
    }

    public function getClass(): string
    {
        return EmptyFileOperation::class;
    }
}
