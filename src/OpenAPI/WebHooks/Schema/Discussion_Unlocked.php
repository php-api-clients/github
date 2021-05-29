<?php

namespace ApiClients\Client\Github\OpenAPI\WebHooks\Schema;

final class Discussion_Unlocked
{
    public const SCHEMA_TITLE = 'discussion unlocked event';
    public const SCHEMA_DESCRIPTION = '';
    private ?string $action = null;
    private $discussion;
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
    public function discussion()
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
