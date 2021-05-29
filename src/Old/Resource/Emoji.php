<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\Resource;

use ApiClients\Foundation\Hydrator\Annotation\EmptyResource;
use ApiClients\Foundation\Resource\AbstractResource;

/**
 * @EmptyResource("EmptyEmoji")
 */
abstract class Emoji extends AbstractResource implements EmojiInterface
{
    protected string $name;

    protected string $image;

    public function name(): string
    {
        return $this->name;
    }

    public function image(): string
    {
        return $this->image;
    }
}
