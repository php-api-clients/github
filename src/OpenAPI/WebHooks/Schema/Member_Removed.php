<?php

namespace ApiClients\Client\Github\OpenAPI\WebHooks\Schema;

final class Member_Removed
{
    public const SCHEMA_TITLE = 'member removed event';
    public const SCHEMA_DESCRIPTION = '';
    private ?string $action = null;
    private array $member = array();
    /**
     * A git repository
     */
    private array $repository = array();
    /**
     * Installation
     */
    private array $installation = array();
    private array $sender = array();
    public function action() : ?string
    {
        return $this->action;
    }
    public function member() : array
    {
        return $this->member;
    }
    public function repository() : array
    {
        return $this->repository;
    }
    public function installation() : array
    {
        return $this->installation;
    }
    public function sender() : array
    {
        return $this->sender;
    }
}
