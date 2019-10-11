<?php declare(strict_types=1);

namespace ApiClients\Client\Github\Resource\Async\Repository\Commit;

use ApiClients\Client\Github\CommandBus\Command\RefreshCommand;
use ApiClients\Client\Github\Resource\Repository\Commit\CombinedStatus as BaseCombinedStatus;
use React\Promise\PromiseInterface;

class CombinedStatus extends BaseCombinedStatus
{
    public function refresh(): PromiseInterface
    {
        return $this->handleCommand(
            new RefreshCommand($this)
        );
    }
}
