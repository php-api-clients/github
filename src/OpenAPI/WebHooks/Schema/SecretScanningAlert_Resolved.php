<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\WebHooks\Schema;

final class SecretScanningAlert_Resolved
{
    public const SCHEMA_TITLE       = 'secret_scanning_alert resolved event';
    public const SCHEMA_DESCRIPTION = '';
    private ?string $action         = null;
    /**
     * The secret scanning alert involved in the event.
     */
    private array $alert = [];
    /**
     * A git repository
     *
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\WebHooks\Schema\Repository::class)
     */
    private ?Repository $repository = null;
    /** @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\WebHooks\Schema\Organization::class) */
    private ?Organization $organization = null;
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

    public function alert(): array
    {
        return $this->alert;
    }

    public function repository(): ?Repository
    {
        return $this->repository;
    }

    public function organization(): ?Organization
    {
        return $this->organization;
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
