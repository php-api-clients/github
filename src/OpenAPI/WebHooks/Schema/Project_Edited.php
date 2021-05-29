<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\WebHooks\Schema;

final class Project_Edited
{
    public const SCHEMA_TITLE       = 'project edited event';
    public const SCHEMA_DESCRIPTION = '';
    private ?string $action         = null;
    /**
     * The changes to the project if the action was `edited`.
     */
    private array $changes = [];
    private array $project = [];
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

    public function changes(): array
    {
        return $this->changes;
    }

    public function project(): array
    {
        return $this->project;
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
