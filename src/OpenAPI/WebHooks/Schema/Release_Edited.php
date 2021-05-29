<?php

namespace ApiClients\Client\Github\OpenAPI\WebHooks\Schema;

final class Release_Edited
{
    public const SCHEMA_TITLE = 'release edited event';
    public const SCHEMA_DESCRIPTION = '';
    private ?string $action = null;
    private array $changes = array();
    /**
     * The [release](https://docs.github.com/en/rest/reference/repos/#get-a-release) object.
     */
    private array $release = array();
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
    public function changes() : array
    {
        return $this->changes;
    }
    public function release() : array
    {
        return $this->release;
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
