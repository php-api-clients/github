<?php

namespace ApiClients\Client\Github\OpenAPI\WebHooks\Schema;

final class InstallationEvent
{
    public const SCHEMA_TITLE = 'Installation Event';
    public const SCHEMA_DESCRIPTION = 'Installation Event';
    private string $action;
    private $installation;
    /**The repositories this installation has access to**/
    private array $repositories;
    public function action() : string
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
}
