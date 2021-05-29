<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\WebHooks\Schema;

final class Member_Added
{
    public const SCHEMA_TITLE       = 'member added event';
    public const SCHEMA_DESCRIPTION = 'Activity related to repository collaborators. The type of activity is specified in the action property.';
    private ?string $action         = null;
    /** @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\WebHooks\Schema\User::class) */
    private ?User $member = null;
    /**
     * A git repository
     *
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\WebHooks\Schema\Repository::class)
     */
    private ?Repository $repository = null;
    /**
     * Installation
     *
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\WebHooks\Schema\InstallationLite::class)
     */
    private ?InstallationLite $installation = null;
    /** @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\WebHooks\Schema\User::class) */
    private ?User $sender = null;

    public function action(): ?string
    {
        return $this->action;
    }

    public function member(): ?User
    {
        return $this->member;
    }

    public function repository(): ?Repository
    {
        return $this->repository;
    }

    public function installation(): ?InstallationLite
    {
        return $this->installation;
    }

    public function sender(): ?User
    {
        return $this->sender;
    }
}
