<?php

namespace ApiClients\Client\Github\OpenAPI\WebHooks\Schema;

final class Discussion_CategoryChanged
{
    public const SCHEMA_TITLE = 'discussion category changed event';
    public const SCHEMA_DESCRIPTION = '';
    private array $changes = array();
    private ?string $action = null;
    private array $discussion = array();
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
    public function changes() : array
    {
        return $this->changes;
    }
    public function action() : ?string
    {
        return $this->action;
    }
    public function discussion() : array
    {
        return $this->discussion;
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
