<?php declare(strict_types=1);

namespace ApiClients\Client\Github\Resource\Async;

use ApiClients\Client\Github\CommandBus\Command\RefreshCommand;
use ApiClients\Client\Github\CommandBus\Command\Repository\AddLabelCommand;
use ApiClients\Client\Github\CommandBus\Command\Repository\BranchesCommand;
use ApiClients\Client\Github\CommandBus\Command\Repository\CommitsCommand;
use ApiClients\Client\Github\CommandBus\Command\Repository\CommunityHealthCommand;
use ApiClients\Client\Github\CommandBus\Command\Repository\ContentsCommand;
use ApiClients\Client\Github\CommandBus\Command\Repository\LabelsCommand;
use ApiClients\Client\Github\CommandBus\Command\Repository\ReleasesCommand;
use ApiClients\Client\Github\CommandBus\Command\Repository\TagsCommand;
use ApiClients\Client\Github\Resource\Repository as BaseRepository;
use React\Promise\PromiseInterface;
use Rx\Observable;
use Rx\ObservableInterface;
use function ApiClients\Tools\Rx\unwrapObservableFromPromise;

class Repository extends BaseRepository
{
    public function refresh(): PromiseInterface
    {
        return $this->handleCommand(
            new RefreshCommand($this)
        );
    }

    public function branches(): ObservableInterface
    {
        return unwrapObservableFromPromise($this->handleCommand(
            new BranchesCommand($this->fullName())
        ));
    }

    public function commits(): ObservableInterface
    {
        return unwrapObservableFromPromise($this->handleCommand(
            new CommitsCommand($this->fullName())
        ));
    }

    public function labels(): ObservableInterface
    {
        return unwrapObservableFromPromise($this->handleCommand(
            new LabelsCommand($this->fullName())
        ));
    }

    public function addLabel(string $name, string $colour): PromiseInterface
    {
        return $this->handleCommand(
            new AddLabelCommand($this->fullName(), $name, $colour)
        );
    }

    public function contents(string $path = '/'): Observable
    {
        return unwrapObservableFromPromise(
            $this->handleCommand(
                new ContentsCommand($this->fullName(), $path)
            )
        );
    }

    public function communityHealth(): PromiseInterface
    {
        return $this->handleCommand(
            new CommunityHealthCommand($this->fullName())
        );
    }

    public function tags(): ObservableInterface
    {
        return unwrapObservableFromPromise($this->handleCommand(
            new TagsCommand($this->fullName())
        ));
    }

    public function releases(): ObservableInterface
    {
        return unwrapObservableFromPromise($this->handleCommand(
            new ReleasesCommand($this->fullName())
        ));
    }
}
