<?php

namespace ApiClients\Client\Github\OpenAPI\WebHooks\Schema;

final class Issues_Closed
{
    public const SCHEMA_TITLE = 'issues closed event';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The action that was performed.
     */
    private ?string $action = null;
    /**
     * The [issue](https://docs.github.com/en/rest/reference/issues) itself.
     */
    private $issue;
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
    public function issue()
    {
        return $this->issue;
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
