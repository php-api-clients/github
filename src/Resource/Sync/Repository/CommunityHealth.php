<?php declare(strict_types=1);

namespace ApiClients\Client\Github\Resource\Sync\Repository;

use ApiClients\Client\Github\Resource\Repository\CommunityHealth as BaseCommunityHealth;
use ApiClients\Client\Github\Resource\Repository\CommunityHealthInterface;
use ApiClients\Foundation\Hydrator\CommandBus\Command\BuildAsyncFromSyncCommand;

class CommunityHealth extends BaseCommunityHealth
{
    public function refresh(): CommunityHealth
    {
        return $this->wait($this->handleCommand(
            new BuildAsyncFromSyncCommand(self::HYDRATE_CLASS, $this)
        )->then(function (CommunityHealthInterface $communityHealth) {
            return $communityHealth->refresh();
        }));
    }
}
