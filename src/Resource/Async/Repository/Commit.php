<?php declare(strict_types=1);

namespace ApiClients\Client\Github\Resource\Async\Repository;

use ApiClients\Client\Github\CommandBus\Command\RefreshCommand;
use ApiClients\Client\Github\CommandBus\Command\Repository\Commit\ChecksCommand;
use ApiClients\Client\Github\CommandBus\Command\Repository\Commit\CreateStatusCommand;
use ApiClients\Client\Github\CommandBus\Command\Repository\Commit\StatusCommand;
use ApiClients\Client\Github\CommandBus\Command\Repository\Commit\StatusesCommand;
use ApiClients\Client\Github\Resource\Repository\Commit as BaseCommit;
use function ApiClients\Tools\Rx\unwrapObservableFromPromise;
use React\Promise\PromiseInterface;
use Rx\ObservableInterface;

class Commit extends BaseCommit
{
    public function refresh(): PromiseInterface
    {
        return $this->handleCommand(
            new RefreshCommand($this)
        );
    }

    public function status(): PromiseInterface
    {
        return $this->handleCommand(
            new StatusCommand($this)
        );
    }

    public function statuses(): ObservableInterface
    {
        return unwrapObservableFromPromise($this->handleCommand(
            new StatusesCommand($this)
        ));
    }

    public function checks(): ObservableInterface
    {
        return unwrapObservableFromPromise($this->handleCommand(
            new ChecksCommand($this)
        ));
    }

    public function createStatus(string $state, ?string $targetUrl = null, ?string $description = null, ?string $context = null): PromiseInterface
    {
        return $this->handleCommand(
            new CreateStatusCommand($this, $state, $targetUrl, $description, $context)
        );
    }
}
