<?php

namespace ApiClients\Client\Github\OpenAPI\WebHooks\Schema;

final class OrgBlock_Blocked
{
    public const SCHEMA_TITLE = 'org_block blocked event';
    public const SCHEMA_DESCRIPTION = '';
    private ?string $action = null;
    private array $blocked_user = array();
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
    public function blocked_user() : array
    {
        return $this->blocked_user;
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
