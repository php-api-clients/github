<?php

namespace ApiClients\Client\Github\OpenAPI\WebHooks\Schema;

final class InstallationRespositoriesEvent
{
    public const SCHEMA_TITLE = 'Installation Event';
    public const SPL_HASH = '0000000038cc28cb000000003d7dc56f';
    public const SCHEMA_DESCRIPTION = 'Installation Event';
    private string $action;
    private \ApiClients\Client\Github\OpenAPI\WebHooks\Schema\Installation $installation;
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
