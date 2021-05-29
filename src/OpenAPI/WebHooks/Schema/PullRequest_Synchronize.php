<?php

namespace ApiClients\Client\Github\OpenAPI\WebHooks\Schema;

final class PullRequest_Synchronize
{
    public const SCHEMA_TITLE = 'pull_request synchronize event';
    public const SCHEMA_DESCRIPTION = '';
    private ?string $action = null;
    /**
     * The pull request number.
     */
    private ?int $number = null;
    private ?string $before = null;
    private ?string $after = null;
    private array $pull_request = array();
    /**
     * A git repository
     */
    private array $repository = array();
    /**
     * Installation
     */
    private array $installation = array();
    private array $organization = array();
    private array $sender = array();
    public function action() : ?string
    {
        return $this->action;
    }
    public function number() : ?int
    {
        return $this->number;
    }
    public function before() : ?string
    {
        return $this->before;
    }
    public function after() : ?string
    {
        return $this->after;
    }
    public function pull_request() : array
    {
        return $this->pull_request;
    }
    public function repository() : array
    {
        return $this->repository;
    }
    public function installation() : array
    {
        return $this->installation;
    }
    public function organization() : array
    {
        return $this->organization;
    }
    public function sender() : array
    {
        return $this->sender;
    }
}
