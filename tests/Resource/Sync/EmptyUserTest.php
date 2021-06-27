<?php

declare(strict_types=1);

namespace ApiClients\Tests\Client\Github\Resource\Sync;

use ApiClients\Client\Github\Resource\Sync\EmptyUser;
use ApiClients\Tools\ResourceTestUtilities\AbstractEmptyResourceTest;

/**
 * @internal
 */
final class EmptyUserTest extends AbstractEmptyResourceTest
{
    public function getSyncAsync(): string
    {
        return 'Sync';
    }

    public function getClass(): string
    {
        return EmptyUser::class;
    }
}
