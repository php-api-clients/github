<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\WebHooks\Schema;

final class DeploymentStatus_Created
{
    public const SCHEMA_TITLE       = 'deployment_status created event';
    public const SCHEMA_DESCRIPTION = '';
    private ?string $action         = null;
    /**
     * The [deployment status](https://docs.github.com/en/rest/reference/repos#list-deployment-statuses).
     */
    private array $deployment_status = [];
    /**
     * The [deployment](https://docs.github.com/en/rest/reference/repos#list-deployments) that this status is associated with.
     */
    private array $deployment = [];
    /**
     * A git repository
     *
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\WebHooks\Schema\Repository::class)
     */
    private ?Repository $repository = null;
    /** @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\WebHooks\Schema\User::class) */
    private ?User $sender = null;
    /**
     * Installation
     *
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\WebHooks\Schema\InstallationLite::class)
     */
    private ?InstallationLite $installation = null;
    /** @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\WebHooks\Schema\Organization::class) */
    private ?Organization $organization = null;

    public function action(): ?string
    {
        return $this->action;
    }

    public function deployment_status(): array
    {
        return $this->deployment_status;
    }

    public function deployment(): array
    {
        return $this->deployment;
    }

    public function repository(): ?Repository
    {
        return $this->repository;
    }

    public function sender(): ?User
    {
        return $this->sender;
    }

    public function installation(): ?InstallationLite
    {
        return $this->installation;
    }

    public function organization(): ?Organization
    {
        return $this->organization;
    }
}
