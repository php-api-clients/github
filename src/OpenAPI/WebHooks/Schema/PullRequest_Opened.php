<?php

namespace ApiClients\Client\Github\OpenAPI\WebHooks\Schema;

final class PullRequest_Opened
{
    public const SCHEMA_TITLE = 'pull_request opened event';
    public const SCHEMA_DESCRIPTION = '';
    private ?string $action = null;
    /**
     * The pull request number.
     */
    private ?int $number = null;
    private $pull_request;
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
    public function pull_request()
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
