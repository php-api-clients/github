<?php declare(strict_types=1);

namespace ApiClients\Client\Github\Resource\Sync;

use ApiClients\Client\Github\Resource\Organization as BaseOrganization;
use ApiClients\Client\Github\Resource\OrganizationInterface;
use ApiClients\Foundation\Hydrator\CommandBus\Command\BuildAsyncFromSyncCommand;

class Organization extends BaseOrganization
{
    public function refresh(): Organization
    {
        return $this->wait($this->handleCommand(
            new BuildAsyncFromSyncCommand(self::HYDRATE_CLASS, $this)
        )->then(function (OrganizationInterface $organization) {
            return $organization->refresh();
        }));
    }
}
