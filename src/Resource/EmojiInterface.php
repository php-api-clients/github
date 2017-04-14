<?php declare(strict_types=1);

namespace ApiClients\Client\Github\Resource;

use ApiClients\Foundation\Resource\ResourceInterface;

interface EmojiInterface extends ResourceInterface
{
    const HYDRATE_CLASS = 'Emoji';

    /**
     * @return string
     */
    public function name() : string;

    /**
     * @return string
     */
    public function image() : string;
}
