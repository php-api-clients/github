<?php

namespace ApiClients\Client\Github\OpenAPI\WebHooks\Schema;

final class InstallationRespositoriesEvent
{
    public const SCHEMA_TITLE = 'Installation Event';
    public const SPL_HASH = '00000000733b768a0000000053f73146';
    public const SCHEMA_DESCRIPTION = 'Installation Event';
    private string $action;
    private $installation;
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\WebHooks\Schema\Repository>
     */
    private array $repositories_added;
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\WebHooks\Schema\Repository>
     */
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
