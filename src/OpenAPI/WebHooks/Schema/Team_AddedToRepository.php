<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\WebHooks\Schema;

final class Team_AddedToRepository
{
    public const SCHEMA_TITLE       = 'team added_to_repository event';
    public const SCHEMA_DESCRIPTION = '';
    private ?string $action         = null;
    /**
     * Groups of organization members that gives permissions on specified repositories.
     */
    private array $team = [];
    /**
     * A git repository
     */
    private array $repository   = [];
    private array $sender       = [];
    private array $organization = [];

    public function action(): ?string
    {
        return $this->action;
    }

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

    public function organization(): array
    {
        return $this->organization;
    }
}
