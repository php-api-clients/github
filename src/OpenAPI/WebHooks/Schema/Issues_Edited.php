<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\WebHooks\Schema;

final class Issues_Edited
{
    public const SCHEMA_TITLE       = 'issues edited event';
    public const SCHEMA_DESCRIPTION = '';
    private ?string $action         = null;
    private array $issue            = [];
    private array $label            = [];
    /**
     * The changes to the issue.
     */
    private array $changes = [];
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

    public function issue(): array
    {
        return $this->issue;
    }

    public function label(): array
    {
        return $this->label;
    }

    public function changes(): array
    {
        return $this->changes;
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
