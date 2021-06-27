<?php

declare(strict_types=1);

namespace ApiClients\Tests\Client\Github\Resource\Async;

use ApiClients\Client\Github\ApiSettings;
use ApiClients\Client\Github\Resource\Emoji;
use ApiClients\Tools\ResourceTestUtilities\AbstractResourceTest;

/**
 * @internal
 */
class EmojiTest extends AbstractResourceTest
{
    public function getSyncAsync(): string
    {
        return 'Async';
    }

    public function getClass(): string
    {
        return Emoji::class;
    }

    public function getNamespace(): string
    {
        return ApiSettings::NAMESPACE;
    }
}
