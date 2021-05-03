<?php

namespace ApiClients\Client\Github\OpenAPI\WebHooks\Schema;

final class InstallationRespositoriesEvent
{
    public const SCHEMA_TITLE = 'Installation Event';
    public const SCHEMA_DESCRIPTION = 'Installation Event';
    private ?string $action = null;
    private ?\ApiClients\Client\Github\OpenAPI\WebHooks\Schema\Installation $installation = null;
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\WebHooks\Schema\Repository>
     */
    private array $repositories_added = array();
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\WebHooks\Schema\Repository>
     */
    private array $repositories_removed = array();
    public function action() : ?string
    {
        return $this->action;
    }
    public function installation() : ?\ApiClients\Client\Github\OpenAPI\WebHooks\Schema\Installation
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
