<?php declare(strict_types=1);

namespace ApiClients\Client\Github\Resource\Async\Repository;

use ApiClients\Client\Github\CommandBus\Command\RefreshCommand;
use ApiClients\Client\Github\Resource\Repository\Commit as BaseCommit;
use React\Promise\PromiseInterface;

class Commit extends BaseCommit
{
    public function refresh() : PromiseInterface
    {
        return $this->handleCommand(
            new RefreshCommand($this)
        );
    }
}
