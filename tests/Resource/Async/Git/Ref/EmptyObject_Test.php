<?php declare(strict_types=1);

namespace ApiClients\Tests\Client\Github\Resource\Async\Git\Ref;

use ApiClients\Client\Github\Resource\Async\Git\Ref\EmptyObject_;
use ApiClients\Tools\ResourceTestUtilities\AbstractEmptyResourceTest;

/**
 * @internal
 */
final class EmptyObject_Test extends AbstractEmptyResourceTest
{
    public function getSyncAsync(): string
    {
        return 'Async';
    }

    public function getClass(): string
    {
        return EmptyObject_::class;
    }
}
