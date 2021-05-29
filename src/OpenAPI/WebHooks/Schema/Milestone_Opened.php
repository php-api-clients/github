<?php

namespace ApiClients\Client\Github\OpenAPI\WebHooks\Schema;

final class Milestone_Opened
{
    public const SCHEMA_TITLE = 'milestone opened event';
    public const SCHEMA_DESCRIPTION = '';
    private ?string $action = null;
    private $milestone;
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
    public function milestone()
    {
        return $this->milestone;
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
