<?php

namespace ApiClients\Client\Github\OpenAPI\WebHooks\Schema;

final class DeploymentStatusEvent
{
    public const SCHEMA_TITLE = 'deployment_status_event';
    public const SCHEMA_DESCRIPTION = '';
    private string $action;
    /**
     * The [deployment status](https://docs.github.com/en/rest/reference/repos#list-deployment-statuses).
     */
    private array $deployment_status = array();
    /**
     * The [deployment](https://docs.github.com/en/rest/reference/repos#list-deployments) that this status is associated with.
     */
    private array $deployment = array();
    /**
     * A git repository
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\WebHooks\Schema\Repository::class)
     */
    private \ApiClients\Client\Github\OpenAPI\WebHooks\Schema\Repository $repository;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\WebHooks\Schema\User::class)
     */
    private \ApiClients\Client\Github\OpenAPI\WebHooks\Schema\User $sender;
    /**
     * Installation
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\WebHooks\Schema\InstallationLite::class)
     */
    private ?\ApiClients\Client\Github\OpenAPI\WebHooks\Schema\InstallationLite $installation = null;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\WebHooks\Schema\Organization::class)
     */
    private ?\ApiClients\Client\Github\OpenAPI\WebHooks\Schema\Organization $organization = null;
    public function action() : string
    {
        return $this->action;
    }
    /**
     * The [deployment status](https://docs.github.com/en/rest/reference/repos#list-deployment-statuses).
     */
    public function deployment_status() : array
    {
        return $this->deployment_status;
    }
    /**
     * The [deployment](https://docs.github.com/en/rest/reference/repos#list-deployments) that this status is associated with.
     */
    public function deployment() : array
    {
        return $this->deployment;
    }
    /**
     * A git repository
     */
    public function repository() : \ApiClients\Client\Github\OpenAPI\WebHooks\Schema\Repository
    {
        return $this->repository;
    }
    public function sender() : \ApiClients\Client\Github\OpenAPI\WebHooks\Schema\User
    {
        return $this->sender;
    }
    /**
     * Installation
     */
    public function installation() : ?\ApiClients\Client\Github\OpenAPI\WebHooks\Schema\InstallationLite
    {
        return $this->installation;
    }
    public function organization() : ?\ApiClients\Client\Github\OpenAPI\WebHooks\Schema\Organization
    {
        return $this->organization;
    }
}
