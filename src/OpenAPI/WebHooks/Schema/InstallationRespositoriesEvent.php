<?php

namespace ApiClients\Client\Github\OpenAPI\WebHooks\Schema;

final class InstallationRespositoriesEvent
{
    public const SCHEMA_TITLE = 'Installation Event';
    public const SCHEMA_DESCRIPTION = 'Installation Event';
    private string $action;
    private $installation;
    private array $repositories_added;
    private array $repositories_removed;
    public function action() : string
    {
        return $this->action;
    }
    public function installation()
    {
        return $this->installation;
    }
    public function repositories_added() : array
    {
        return $this->repositories_added;
    }
    public function repositories_removed() : array
    {
        return $this->repositories_removed;
    }
}
