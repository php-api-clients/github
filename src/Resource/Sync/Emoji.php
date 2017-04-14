<?php declare(strict_types=1);

namespace ApiClients\Client\Github\Resource\Sync;

use ApiClients\Foundation\Hydrator\CommandBus\Command\BuildAsyncFromSyncCommand;
use ApiClients\Client\Github\Resource\Emoji as BaseEmoji;
use ApiClients\Client\Github\Resource\EmojiInterface;

class Emoji extends BaseEmoji
{
    public function refresh() : Emoji
    {
        return $this->wait($this->handleCommand(
            new BuildAsyncFromSyncCommand(self::HYDRATE_CLASS, $this)
        )->then(function (EmojiInterface $emoji) {
            return $emoji->refresh();
        }));
    }
}
