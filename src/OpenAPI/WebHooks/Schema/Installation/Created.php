<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\WebHooks\Schema\Installation;

use ApiClients\Client\Github\OpenAPI\WebHooks\Schema\Installation;
use ApiClients\Client\Github\OpenAPI\WebHooks\Schema\Installation\Created\Repositories;
use ApiClients\Client\Github\OpenAPI\WebHooks\Schema\User;

final class Created
{
    public const SCHEMA_TITLE       = 'installation created event';
    public const SCHEMA_DESCRIPTION = '';
    private string $action;
    /**
     * The GitHub App installation.
     *
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\WebHooks\Schema\Installation::class)
     */
    private Installation $installation;
    /**
     * An array of repository objects that the installation can access.
     */
    private array $repositories = [];
    /** @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\WebHooks\Schema\User::class) */
    private User $requester;
    /** @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\WebHooks\Schema\User::class) */
    private User $sender;

    public function action(): string
    {
        return $this->action;
    }

    /**
     * The GitHub App installation.
     */
    public function installation(): Installation
    {
        return $this->installation;
    }

    /**
     * An array of repository objects that the installation can access.
     *
     * @return array<Repositories>
     */
    public function repositories(): array
    {
        return $this->repositories;
    }

    public function requester(): User
    {
        return $this->requester;
    }

    public function sender(): User
    {
        return $this->sender;
    }
}
