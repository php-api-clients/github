<?php

namespace ApiClients\Client\Github\OpenAPI\WebHooks\Schema;

final class Fork_Event
{
    public const SCHEMA_TITLE = 'fork event';
    public const SCHEMA_DESCRIPTION = 'A user forks a repository.';
    /**
     * The created [`repository`](https://docs.github.com/en/rest/reference/repos#get-a-repository) resource.
     */
    private $forkee;
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
    public function forkee()
    {
        return $this->forkee;
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
