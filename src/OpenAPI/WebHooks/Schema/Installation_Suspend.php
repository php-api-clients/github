<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\WebHooks\Schema;

use ApiClients\Client\Github\OpenAPI\WebHooks\Schema\Installation_Suspend\Repositories;

final class Installation_Suspend
{
    public const SCHEMA_TITLE       = 'installation suspend event';
    public const SCHEMA_DESCRIPTION = '';
    private ?string $action         = null;
    private $installation;
    /**
     * An array of repository objects that the installation can access.
     *
     * @var array<Repositories>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\WebHooks\Schema\Installation_Suspend\Repositories::class)
     */
    private array $repositories = [];
    private ?null $requester    = null;
    /** @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\WebHooks\Schema\User::class) */
    private ?User $sender = null;

    public function action(): ?string
    {
        return $this->action;
    }

    public function installation()
    {
        return $this->installation;
    }

    public function repositories(): array
    {
        return $this->repositories;
    }

    public function requester(): ?null
    {
        return $this->requester;
    }

    public function sender(): ?User
    {
        return $this->sender;
    }
}
