<?php

namespace ApiClients\Client\Github\OpenAPI\WebHooks\Schema;

final class CheckSuite_Rerequested
{
    public const SCHEMA_TITLE = 'check_suite rerequested event';
    public const SCHEMA_DESCRIPTION = '';
    private ?string $action = null;
    /**
     * The [check_suite](https://docs.github.com/en/rest/reference/checks#suites).
     */
    private array $check_suite = array();
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
    public function check_suite() : array
    {
        return $this->check_suite;
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
