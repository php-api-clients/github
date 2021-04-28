<?php declare(strict_types=1);

namespace ApiClients\Client\Github\Resource\Sync\WebHook;

use ApiClients\Client\Github\Resource\WebHook\Config as BaseConfig;
use ApiClients\Client\Github\Resource\WebHook\ConfigInterface;
use ApiClients\Foundation\Hydrator\CommandBus\Command\BuildAsyncFromSyncCommand;

class Config extends BaseConfig
{
    public function refresh(): Config
    {
        return $this->wait(
            $this->handleCommand(
                new BuildAsyncFromSyncCommand(self::HYDRATE_CLASS, $this)
            )->then(function (ConfigInterface $config) {
                return $config->refresh();
            })
        );
    }
}
