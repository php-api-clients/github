<?php

namespace ApiClients\Client\Github\OpenAPI\WebHooks\Schema;

final class Installation_Created
{
    public const SCHEMA_TITLE = 'installation created event';
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
    private array $requester = array();
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
    public function requester() : array
    {
        return $this->requester;
    }
    public function sender() : array
    {
        return $this->sender;
    }
}
