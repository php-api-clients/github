<?php declare(strict_types=1);

namespace ApiClients\Client\Github\Resource\Sync;

use ApiClients\Foundation\Hydrator\CommandBus\Command\BuildAsyncFromSyncCommand;
use ApiClients\Client\Github\Resource\CodeOfConduct as BaseCodeOfConduct;
use ApiClients\Client\Github\Resource\CodeOfConductInterface;

class CodeOfConduct extends BaseCodeOfConduct
{
    public function refresh() : CodeOfConduct
    {
        return $this->wait($this->handleCommand(
            new BuildAsyncFromSyncCommand(self::HYDRATE_CLASS, $this)
        )->then(function (CodeOfConductInterface $codeOfConduct) {
            return $codeOfConduct->refresh();
        }));
    }
}
