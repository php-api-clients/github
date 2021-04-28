<?php declare(strict_types=1);

namespace ApiClients\Client\Github\Resource\Sync\Repository\Release;

use ApiClients\Client\Github\Resource\Repository\Release\Asset as BaseAsset;
use ApiClients\Client\Github\Resource\Repository\Release\AssetInterface;
use ApiClients\Foundation\Hydrator\CommandBus\Command\BuildAsyncFromSyncCommand;

class Asset extends BaseAsset
{
    public function refresh(): Asset
    {
        return $this->wait($this->handleCommand(
            new BuildAsyncFromSyncCommand(self::HYDRATE_CLASS, $this)
        )->then(function (AssetInterface $asset) {
            return $asset->refresh();
        }));
    }
}
