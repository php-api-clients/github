<?php

namespace ApiClients\Client\Github\OpenAPI\WebHooks\Schema;

final class Repository_Unarchived
{
    public const SCHEMA_TITLE = 'repository unarchived event';
    public const SCHEMA_DESCRIPTION = '';
    private ?string $action = null;
    private $repository;
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
    public function repository()
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
