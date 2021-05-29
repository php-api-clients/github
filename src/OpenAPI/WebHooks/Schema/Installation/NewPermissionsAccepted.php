<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\WebHooks\Schema\Installation;

use ApiClients\Client\Github\OpenAPI\WebHooks\Schema\Installation;
use ApiClients\Client\Github\OpenAPI\WebHooks\Schema\Installation\NewPermissionsAccepted\Repositories;
use ApiClients\Client\Github\OpenAPI\WebHooks\Schema\User;

final class NewPermissionsAccepted
{
    public const SCHEMA_TITLE       = 'installation new_permissions_accepted event';
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
    private null $requester;
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

    public function requester(): null
    {
        return $this->requester;
    }

    public function sender(): User
    {
        return $this->sender;
    }
}
