<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\WebHooks\Schema;

final class TeamAdd_Event
{
    public const SCHEMA_TITLE       = 'team_add event';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * Groups of organization members that gives permissions on specified repositories.
     */
    private array $team = [];
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

    public function team(): array
    {
        return $this->team;
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
