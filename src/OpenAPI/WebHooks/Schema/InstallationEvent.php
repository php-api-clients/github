<?php

namespace ApiClients\Client\Github\OpenAPI\WebHooks\Schema;

final class InstallationEvent
{
    public const SCHEMA_TITLE = 'Installation Event';
    public const SCHEMA_DESCRIPTION = 'Installation Event';
    private ?string $action = null;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\WebHooks\Schema\Installation::class)
     */
    private ?\ApiClients\Client\Github\OpenAPI\WebHooks\Schema\Installation $installation = null;
    /**
     * The repositories this installation has access to
     * @var array<\ApiClients\Client\Github\OpenAPI\WebHooks\Schema\Repository>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\WebHooks\Schema\Repository::class)
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
