<?php

namespace ApiClients\Client\Github\OpenAPI\WebHooks\Schema;

final class Membership_Added
{
    public const SCHEMA_TITLE = 'membership added event';
    public const SCHEMA_DESCRIPTION = '';
    private ?string $action = null;
    /**
     * The scope of the membership. Currently, can only be `team`.
     */
    private ?string $scope = null;
    private array $member = array();
    private array $sender = array();
    /**
     * Groups of organization members that gives permissions on specified repositories.
     */
    private array $team = array();
    private array $organization = array();
    /**
     * Installation
     */
    private array $installation = array();
    public function action() : ?string
    {
        return $this->action;
    }
    public function scope() : ?string
    {
        return $this->scope;
    }
    public function member() : array
    {
        return $this->member;
    }
    public function sender() : array
    {
        return $this->sender;
    }
    public function team() : array
    {
        return $this->team;
    }
    public function organization() : array
    {
        return $this->organization;
    }
    public function installation() : array
    {
        return $this->installation;
    }
}
