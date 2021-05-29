<?php

namespace ApiClients\Client\Github\OpenAPI\WebHooks\Schema;

final class Installation_NewPermissionsAccepted
{
    public const SCHEMA_TITLE = 'installation new_permissions_accepted event';
    public const SCHEMA_DESCRIPTION = '';
    private ?string $action = null;
    /**
     * The GitHub App installation.
     */
    private array $installation = array();
    /**
     * An array of repository objects that the installation can access.
     */
    private array $repositories = array();
    private ?null $requester = null;
    private array $sender = array();
    public function action() : ?string
    {
        return $this->action;
    }
    public function installation() : array
    {
        return $this->installation;
    }
    public function repositories() : array
    {
        return $this->repositories;
    }
    public function requester() : ?null
    {
        return $this->requester;
    }
    public function sender() : array
    {
        return $this->sender;
    }
}
