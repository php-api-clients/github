<?php

namespace ApiClients\Client\Github\OpenAPI\WebHooks\Schema;

final class InstallationEvent
{
    public const SCHEMA_TITLE = 'Installation Event';
    public const SPL_HASH = '0000000038cc28d5000000003d7dc56f';
    public const SCHEMA_DESCRIPTION = 'Installation Event';
    private string $action;
    private \ApiClients\Client\Github\OpenAPI\WebHooks\Schema\Installation $installation;
    /**
     * The repositories this installation has access to
     * @var array<\ApiClients\Client\Github\OpenAPI\WebHooks\Schema\Repository>
     */
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
