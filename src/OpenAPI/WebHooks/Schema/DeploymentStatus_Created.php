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
     */
    private array $repository = [];
    private array $sender     = [];
    /**
     * Installation
     */
    private array $installation = [];
    private array $organization = [];

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

    public function repository(): array
    {
        return $this->repository;
    }

    public function sender(): array
    {
        return $this->sender;
    }

    public function installation(): array
    {
        return $this->installation;
    }

    public function organization(): array
    {
        return $this->organization;
    }
}
