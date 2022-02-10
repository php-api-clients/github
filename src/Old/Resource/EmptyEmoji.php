<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\Resource;

use ApiClients\Foundation\Resource\EmptyResourceInterface;

abstract class EmptyEmoji implements EmojiInterface, EmptyResourceInterface
{
    public function name(): string
    {
        return null;
    }

    public function image(): string
    {
        return null;
    }
}
