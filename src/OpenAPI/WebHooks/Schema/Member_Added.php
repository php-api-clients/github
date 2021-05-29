<?php

namespace ApiClients\Client\Github\OpenAPI\WebHooks\Schema;

final class Member_Added
{
    public const SCHEMA_TITLE = 'member added event';
    public const SCHEMA_DESCRIPTION = 'Activity related to repository collaborators. The type of activity is specified in the action property.';
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
