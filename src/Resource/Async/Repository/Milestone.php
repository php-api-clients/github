<?php declare(strict_types=1);

namespace ApiClients\Client\Github\Resource\Async\Repository;

use ApiClients\Client\Github\CommandBus\Command\RefreshCommand;
use ApiClients\Client\Github\Resource\Repository\Milestone as BaseMilestone;
use React\Promise\PromiseInterface;

class Milestone extends BaseMilestone
{
    public function refresh(): PromiseInterface
    {
        return $this->handleCommand(new RefreshCommand($this));
    }
}
