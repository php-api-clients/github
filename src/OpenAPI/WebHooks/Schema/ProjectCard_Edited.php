<?php

namespace ApiClients\Client\Github\OpenAPI\WebHooks\Schema;

final class ProjectCard_Edited
{
    public const SCHEMA_TITLE = 'project_card edited event';
    public const SCHEMA_DESCRIPTION = '';
    private ?string $action = null;
    private array $changes = array();
    private array $project_card = array();
    /**
     * A git repository
     */
    private array $repository = array();
    private array $sender = array();
    private array $organization = array();
    /**
     * Installation
     */
    private array $installation = array();
    public function action() : ?string
    {
        return $this->action;
    }
    public function changes() : array
    {
        return $this->changes;
    }
    public function project_card() : array
    {
        return $this->project_card;
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
    public function installation() : array
    {
        return $this->installation;
    }
}
