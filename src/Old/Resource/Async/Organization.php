<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\Resource\Async;

use ApiClients\Client\Github\CommandBus\Command\Organization\AddWebHookCommand;
use ApiClients\Client\Github\CommandBus\Command\RefreshCommand;
use ApiClients\Client\Github\CommandBus\Command\User\OrganizationsCommand;
use ApiClients\Client\Github\CommandBus\Command\User\RepositoriesCommand;
use ApiClients\Client\Github\CommandBus\Command\User\RepositoryCommand;
use ApiClients\Client\Github\CommandBus\Command\WebHooksCommand;
use ApiClients\Client\Github\Resource\Organization as BaseOrganization;
use React\Promise\PromiseInterface;
use Rx\ObservableInterface;

use function ApiClients\Tools\Rx\unwrapObservableFromPromise;

class Organization extends BaseOrganization
{
    public function refresh(): PromiseInterface
    {
        return $this->handleCommand(
            new RefreshCommand($this)
        );
    }

    public function repository(string $repository): PromiseInterface
    {
        return $this->handleCommand(
            new RepositoryCommand($this->login(), $repository)
        );
    }

    public function repositories(): ObservableInterface
    {
        return unwrapObservableFromPromise($this->handleCommand(
            new RepositoriesCommand($this->login())
        ));
    }

    public function organizations(): ObservableInterface
    {
        return unwrapObservableFromPromise($this->handleCommand(
            new OrganizationsCommand($this->login())
        ));
    }

    public function addWebHook(
        string $name,
        array $config,
        array $events,
        bool $active
    ): PromiseInterface {
        return $this->handleCommand(
            new AddWebHookCommand(
                $this->login(),
                $name,
                $config,
                $events,
                $active
            )
        );
    }

    public function webHooks(): ObservableInterface
    {
        return unwrapObservableFromPromise($this->handleCommand(
            new WebHooksCommand($this->login(), 'orgs')
        ));
    }
}
