<?php declare(strict_types=1);

namespace ApiClients\Client\Github\Resource\Sync;

use ApiClients\Client\Github\Resource\License as BaseLicense;
use ApiClients\Client\Github\Resource\LicenseInterface;
use ApiClients\Foundation\Hydrator\CommandBus\Command\BuildAsyncFromSyncCommand;

class License extends BaseLicense
{
    public function refresh(): License
    {
        return $this->wait($this->handleCommand(
            new BuildAsyncFromSyncCommand(self::HYDRATE_CLASS, $this)
        )->then(function (LicenseInterface $license) {
            return $license->refresh();
        }));
    }
}
