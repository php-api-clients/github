<?php

namespace ApiClients\Client\Github\OpenAPI\WebHooks\Schema;

final class Issues_Assigned
{
    public const SCHEMA_TITLE = 'issues assigned event';
    public const SCHEMA_DESCRIPTION = 'Activity related to an issue. The type of activity is specified in the action property.';
    /**
     * The action that was performed.
     */
    private ?string $action = null;
    private array $issue = array();
    /**
     * The optional user who was assigned or unassigned from the issue.
     */
    private $assignee;
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
    public function issue() : array
    {
        return $this->issue;
    }
    public function assignee()
    {
        return $this->assignee;
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
