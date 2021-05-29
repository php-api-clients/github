<?php

namespace ApiClients\Client\Github\OpenAPI\WebHooks\Schema;

final class Project_Edited
{
    public const SCHEMA_TITLE = 'project edited event';
    public const SCHEMA_DESCRIPTION = '';
    private ?string $action = null;
    /**
     * The changes to the project if the action was `edited`.
     */
    private array $changes = array();
    private array $project = array();
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
    public function project() : array
    {
        return $this->project;
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
