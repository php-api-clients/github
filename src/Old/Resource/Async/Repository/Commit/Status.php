<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\Resource\Async\Repository\Commit;

use ApiClients\Client\Github\CommandBus\Command\RefreshCommand;
use ApiClients\Client\Github\Resource\Repository\Commit\Status as BaseStatus;
use React\Promise\PromiseInterface;

class Status extends BaseStatus
{
    public function refresh(): PromiseInterface
    {
        return $this->handleCommand(
            new RefreshCommand($this)
        );
    }
}
