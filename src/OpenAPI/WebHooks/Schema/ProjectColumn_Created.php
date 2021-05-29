<?php

namespace ApiClients\Client\Github\OpenAPI\WebHooks\Schema;

final class ProjectColumn_Created
{
    public const SCHEMA_TITLE = 'project_column created event';
    public const SCHEMA_DESCRIPTION = '';
    private ?string $action = null;
    private array $project_column = array();
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
    public function project_column() : array
    {
        return $this->project_column;
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
