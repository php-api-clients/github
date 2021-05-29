<?php

namespace ApiClients\Client\Github\OpenAPI\WebHooks\Schema;

final class CheckRun_Completed
{
    public const SCHEMA_TITLE = 'check_run completed event';
    public const SCHEMA_DESCRIPTION = '';
    private ?string $action = null;
    /**
     * The [check_run](https://docs.github.com/en/rest/reference/checks#get-a-check-run).
     */
    private array $check_run = array();
    /**
     * The action requested by the user.
     */
    private $requested_action;
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
    public function check_run() : array
    {
        return $this->check_run;
    }
    public function requested_action()
    {
        return $this->requested_action;
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
