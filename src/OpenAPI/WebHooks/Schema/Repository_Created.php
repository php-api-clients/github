<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\WebHooks\Schema;

final class Repository_Created
{
    public const SCHEMA_TITLE       = 'repository created event';
    public const SCHEMA_DESCRIPTION = '';
    private ?string $action         = null;
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
