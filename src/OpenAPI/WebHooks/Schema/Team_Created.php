<?php

namespace ApiClients\Client\Github\OpenAPI\WebHooks\Schema;

final class Team_Created
{
    public const SCHEMA_TITLE = 'team created event';
    public const SCHEMA_DESCRIPTION = '';
    private ?string $action = null;
    /**
     * Groups of organization members that gives permissions on specified repositories.
     */
    private array $team = array();
    /**
     * A git repository
     */
    private array $repository = array();
    private array $sender = array();
    private array $organization = array();
    public function action() : ?string
    {
        return $this->action;
    }
    public function team() : array
    {
        return $this->team;
    }
    public function repository() : array
    {
        return $this->repository;
    }
    public function sender() : array
    {
        return $this->sender;
    }
    public function organization() : array
    {
        return $this->organization;
    }
}
