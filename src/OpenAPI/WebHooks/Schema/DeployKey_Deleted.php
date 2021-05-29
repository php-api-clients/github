<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\WebHooks\Schema;

final class DeployKey_Deleted
{
    public const SCHEMA_TITLE       = 'deploy_key deleted event';
    public const SCHEMA_DESCRIPTION = '';
    private ?string $action         = null;
    /**
     * The [`deploy key`](https://docs.github.com/en/rest/reference/repos#get-a-deploy-key) resource.
     */
    private array $key = [];
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

    public function key(): array
    {
        return $this->key;
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
