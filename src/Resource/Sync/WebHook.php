<?php declare(strict_types=1);

namespace ApiClients\Client\Github\Resource\Sync;

use ApiClients\Client\Github\Resource\WebHook as BaseWebHook;
use ApiClients\Client\Github\Resource\WebHookInterface;
use ApiClients\Foundation\Hydrator\CommandBus\Command\BuildAsyncFromSyncCommand;

class WebHook extends BaseWebHook
{
    public function refresh(): WebHook
    {
        return $this->wait($this->handleCommand(new BuildAsyncFromSyncCommand(self::HYDRATE_CLASS, $this))->then(function (WebHookInterface $webHook) {
            return $webHook->refresh();
        }));
    }
}
