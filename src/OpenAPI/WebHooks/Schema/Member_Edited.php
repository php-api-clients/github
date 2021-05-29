<?php

namespace ApiClients\Client\Github\OpenAPI\WebHooks\Schema;

final class Member_Edited
{
    public const SCHEMA_TITLE = 'member edited event';
    public const SCHEMA_DESCRIPTION = '';
    private ?string $action = null;
    private array $member = array();
    /**
     * The changes to the collaborator permissions
     */
    private array $changes = array();
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
    public function changes() : array
    {
        return $this->changes;
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
