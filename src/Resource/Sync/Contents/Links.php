<?php declare(strict_types=1);

namespace ApiClients\Client\Github\Resource\Sync\Contents;

use ApiClients\Client\Github\Resource\Contents\Links as BaseLinks;
use ApiClients\Client\Github\Resource\Contents\LinksInterface;
use ApiClients\Foundation\Hydrator\CommandBus\Command\BuildAsyncFromSyncCommand;

class Links extends BaseLinks
{
    public function refresh(): Links
    {
        return $this->wait($this->handleCommand(
            new BuildAsyncFromSyncCommand(self::HYDRATE_CLASS, $this)
        )->then(function (LinksInterface $links) {
            return $links->refresh();
        }));
    }
}
