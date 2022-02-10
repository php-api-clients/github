<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\Resource\Async;

use ApiClients\Client\Github\Resource\Emoji as BaseEmoji;
use Exception;

class Emoji extends BaseEmoji
{
    public function refresh(): Emoji
    {
        throw new Exception('TODO: create refresh method!');
    }
}
