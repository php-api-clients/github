<?php declare(strict_types=1);

namespace ApiClients\Client\Github\Resource\Sync;

use ApiClients\Foundation\Hydrator\CommandBus\Command\BuildAsyncFromSyncCommand;
use ApiClients\Client\Github\Resource\CodeOfCondyct as BaseCodeOfCondyct;
use ApiClients\Client\Github\Resource\CodeOfCondyctInterface;

class CodeOfCondyct extends BaseCodeOfCondyct
{
    public function refresh() : CodeOfCondyct
    {
        return $this->wait($this->handleCommand(
            new BuildAsyncFromSyncCommand(self::HYDRATE_CLASS, $this)
        )->then(function (CodeOfCondyctInterface $codeOfCondyct) {
            return $codeOfCondyct->refresh();
        }));
    }
}
