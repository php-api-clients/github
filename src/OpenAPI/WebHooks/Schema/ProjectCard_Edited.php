<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\WebHooks\Schema;

final class ProjectCard_Edited
{
    public const SCHEMA_TITLE       = 'project_card edited event';
    public const SCHEMA_DESCRIPTION = '';
    private ?string $action         = null;
    private array $changes          = [];
    private array $project_card     = [];
    /**
     * A git repository
     */
    private array $repository   = [];
    private array $sender       = [];
    private array $organization = [];
    /**
     * Installation
     */
    private array $installation = [];

    public function action(): ?string
    {
        return $this->action;
    }

    public function changes(): array
    {
        return $this->changes;
    }

    public function project_card(): array
    {
        return $this->project_card;
    }

    public function repository(): array
    {
        return $this->repository;
    }

    public function sender(): array
    {
        return $this->sender;
    }

    public function organization(): array
    {
        return $this->organization;
    }

    public function installation(): array
    {
        return $this->installation;
    }
}
