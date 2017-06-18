<?php declare(strict_types=1);

namespace ApiClients\Tests\Client\Github\Resource\Async\WebHook;

use ApiClients\Client\Github\Resource\Async\WebHook\EmptyConfig;
use ApiClients\Tools\ResourceTestUtilities\AbstractEmptyResourceTest;

final class EmptyConfigTest extends AbstractEmptyResourceTest
{
    public function getSyncAsync(): string
    {
        return 'Async';
    }

    public function getClass(): string
    {
        return EmptyConfig::class;
    }
}
