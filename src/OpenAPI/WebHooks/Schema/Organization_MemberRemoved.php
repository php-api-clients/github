<?php

namespace ApiClients\Client\Github\OpenAPI\WebHooks\Schema;

final class Organization_MemberRemoved
{
    public const SCHEMA_TITLE = 'organization member_removed event';
    public const SCHEMA_DESCRIPTION = '';
    private ?string $action = null;
    /**
     * The membership between the user and the organization. Not present when the action is `member_invited`.
     */
    private array $membership = array();
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
    public function membership() : array
    {
        return $this->membership;
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
