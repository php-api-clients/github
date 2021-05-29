<?php

namespace ApiClients\Client\Github\OpenAPI\WebHooks\Schema;

final class Milestone_Edited
{
    public const SCHEMA_TITLE = 'milestone edited event';
    public const SCHEMA_DESCRIPTION = '';
    private ?string $action = null;
    /**
     * The changes to the milestone if the action was `edited`.
     */
    private array $changes = array();
    /**
     * A collection of related issues and pull requests.
     */
    private array $milestone = array();
    /**
     * A git repository
     */
    private array $repository = array();
    private array $sender = array();
    /**
     * Installation
     */
    private array $installation = array();
    private array $organization = array();
    public function action() : ?string
    {
        return $this->action;
    }
    public function changes() : array
    {
        return $this->changes;
    }
    public function milestone() : array
    {
        return $this->milestone;
    }
    public function repository() : array
    {
        return $this->repository;
    }
    public function sender() : array
    {
        return $this->sender;
    }
    public function installation() : array
    {
        return $this->installation;
    }
    public function organization() : array
    {
        return $this->organization;
    }
}
