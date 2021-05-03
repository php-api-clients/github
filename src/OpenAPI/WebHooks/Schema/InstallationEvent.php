<?php

namespace ApiClients\Client\Github\OpenAPI\WebHooks\Schema;

final class InstallationEvent
{
    public const SCHEMA_TITLE = 'Installation Event';
    public const SPL_HASH = '000000002d0a6ca00000000001e9ea35';
    public const SCHEMA_DESCRIPTION = 'Installation Event';
    private ?string $action = null;
    private ?\ApiClients\Client\Github\OpenAPI\WebHooks\Schema\Installation $installation = null;
    /**
     * The repositories this installation has access to
     * @var array<\ApiClients\Client\Github\OpenAPI\WebHooks\Schema\Repository>
     */
    private array $repositories = array();
    public function action() : ?string
    {
        return $this->action;
    }
    public function installation() : ?\ApiClients\Client\Github\OpenAPI\WebHooks\Schema\Installation
    {
        return $this->installation;
    }
    public function repositories() : array
    {
        return $this->repositories;
    }
}
