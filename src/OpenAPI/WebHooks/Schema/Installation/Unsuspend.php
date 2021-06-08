<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\WebHooks\Schema\Installation;

use ApiClients\Client\Github\OpenAPI\WebHooks\Schema\Installation\Unsuspend\Repositories;
use ApiClients\Client\Github\OpenAPI\WebHooks\Schema\User;

final class Unsuspend
{
    public const SCHEMA_TITLE       = 'installation unsuspend event';
    public const SCHEMA_DESCRIPTION = '';
    private string $action;
    private $installation;
    /**
     * An array of repository objects that the installation can access.
     *
     * @var array<Repositories>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\WebHooks\Schema\Installation\Unsuspend\Repositories::class)
     */
    private array $repositories = [];
    private $requester;
    /** @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\WebHooks\Schema\User::class) */
    private User $sender;

    public function action(): string
    {
        return $this->action;
    }

    public function installation()
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

    public function requester()
    {
        return $this->requester;
    }

    public function sender(): User
    {
        return $this->sender;
    }
}
