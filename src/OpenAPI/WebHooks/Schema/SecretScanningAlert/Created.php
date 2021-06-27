<?php

namespace ApiClients\Client\Github\OpenAPI\WebHooks\Schema\SecretScanningAlert;

final class Created
{
    public const SCHEMA_TITLE = 'secret_scanning_alert created event';
    public const SCHEMA_DESCRIPTION = '';
    private string $action;
    /**
     * The secret scanning alert involved in the event.
     */
    private array $alert = array();
    /**
     * A git repository
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\WebHooks\Schema\Repository::class)
     */
    private \ApiClients\Client\Github\OpenAPI\WebHooks\Schema\Repository $repository;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\WebHooks\Schema\Organization::class)
     */
    private ?\ApiClients\Client\Github\OpenAPI\WebHooks\Schema\Organization $organization = null;
    /**
     * Installation
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\WebHooks\Schema\InstallationLite::class)
     */
    private ?\ApiClients\Client\Github\OpenAPI\WebHooks\Schema\InstallationLite $installation = null;
    public function action() : string
    {
        return $this->action;
    }
    /**
     * The secret scanning alert involved in the event.
     */
    public function alert() : array
    {
        return $this->alert;
    }
    /**
     * A git repository
     */
    public function repository() : \ApiClients\Client\Github\OpenAPI\WebHooks\Schema\Repository
    {
        return $this->repository;
    }
    public function organization() : ?\ApiClients\Client\Github\OpenAPI\WebHooks\Schema\Organization
    {
        return $this->organization;
    }
    /**
     * Installation
     */
    public function installation() : ?\ApiClients\Client\Github\OpenAPI\WebHooks\Schema\InstallationLite
    {
        return $this->installation;
    }
}
