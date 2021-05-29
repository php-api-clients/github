<?php

namespace ApiClients\Client\Github\OpenAPI\WebHooks\Schema;

final class WorkflowRun_Completed
{
    public const SCHEMA_TITLE = 'workflow_run completed event';
    public const SCHEMA_DESCRIPTION = '';
    private ?string $action = null;
    private array $organization = array();
    /**
     * A git repository
     */
    private array $repository = array();
    private array $sender = array();
    private array $workflow = array();
    private $workflow_run;
    /**
     * Installation
     */
    private array $installation = array();
    public function action() : ?string
    {
        return $this->action;
    }
    public function organization() : array
    {
        return $this->organization;
    }
    public function repository() : array
    {
        return $this->repository;
    }
    public function sender() : array
    {
        return $this->sender;
    }
    public function workflow() : array
    {
        return $this->workflow;
    }
    public function workflow_run()
    {
        return $this->workflow_run;
    }
    public function installation() : array
    {
        return $this->installation;
    }
}
