<?php

namespace ApiClients\Client\Github\OpenAPI\WebHooks\Schema;

final class Deployment_Created
{
    public const SCHEMA_TITLE = 'deployment created event';
    public const SCHEMA_DESCRIPTION = '';
    private ?string $action = null;
    /**
     * The [deployment](https://docs.github.com/en/rest/reference/repos#list-deployments).
     */
    private array $deployment = array();
    private ?null $workflow = null;
    private ?null $workflow_run = null;
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
    public function deployment() : array
    {
        return $this->deployment;
    }
    public function workflow() : ?null
    {
        return $this->workflow;
    }
    public function workflow_run() : ?null
    {
        return $this->workflow_run;
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
