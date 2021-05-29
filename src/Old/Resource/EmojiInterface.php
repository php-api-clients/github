<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\Resource;

use ApiClients\Foundation\Resource\ResourceInterface;

interface EmojiInterface extends ResourceInterface
{
    public const HYDRATE_CLASS = 'Emoji';

    public function name(): string;

    public function image(): string;
}
