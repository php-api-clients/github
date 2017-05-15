<?php declare(strict_types=1);

namespace ApiClients\Client\Github\Resource\Sync;

use ApiClients\Client\Github\Resource\Url as BaseUrl;
use ApiClients\Client\Github\Resource\UrlInterface;
use ApiClients\Foundation\Hydrator\CommandBus\Command\BuildAsyncFromSyncCommand;

class Url extends BaseUrl
{
    public function refresh(): Url
    {
        return $this->wait($this->handleCommand(
            new BuildAsyncFromSyncCommand(self::HYDRATE_CLASS, $this)
        )->then(function (UrlInterface $url) {
            return $url->refresh();
        }));
    }
}
