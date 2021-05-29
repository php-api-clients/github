<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\WebHooks\Schema;

final class Installation_Deleted
{
    public const SCHEMA_TITLE       = 'installation deleted event';
    public const SCHEMA_DESCRIPTION = '';
    private ?string $action         = null;
    /**
     * The GitHub App installation.
     *
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\WebHooks\Schema\Installation::class)
     */
    private ?Installation $installation = null;
    /**
     * An array of repository objects that the installation can access.
     */
    private array $repositories = [];
    private ?null $requester    = null;
    /** @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\WebHooks\Schema\User::class) */
    private ?User $sender = null;

    public function action(): ?string
    {
        return $this->action;
    }

    public function installation(): ?Installation
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
