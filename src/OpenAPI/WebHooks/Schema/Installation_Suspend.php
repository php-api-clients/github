<?php

namespace ApiClients\Client\Github\OpenAPI\WebHooks\Schema;

final class Installation_Suspend
{
    public const SCHEMA_TITLE = 'installation suspend event';
    public const SCHEMA_DESCRIPTION = '';
    private ?string $action = null;
    private $installation;
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
    public function installation()
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
