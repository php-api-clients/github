<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\WebHooks\Schema;

final class Issues_Assigned
{
    public const SCHEMA_TITLE       = 'issues assigned event';
    public const SCHEMA_DESCRIPTION = 'Activity related to an issue. The type of activity is specified in the action property.';
    /**
     * The action that was performed.
     */
    private ?string $action = null;
    private array $issue    = [];
    /**
     * The optional user who was assigned or unassigned from the issue.
     */
    private $assignee;
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

    public function assignee()
    {
        return $this->assignee;
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
