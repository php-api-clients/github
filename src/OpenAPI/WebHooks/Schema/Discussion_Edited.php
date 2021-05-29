<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\WebHooks\Schema;

final class Discussion_Edited
{
    public const SCHEMA_TITLE       = 'discussion edited event';
    public const SCHEMA_DESCRIPTION = '';
    private array $changes          = [];
    private ?string $action         = null;
    private array $discussion       = [];
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

    public function changes(): array
    {
        return $this->changes;
    }

    public function action(): ?string
    {
        return $this->action;
    }

    public function discussion(): array
    {
        return $this->discussion;
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
