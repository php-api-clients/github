<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class WebhookInstallationUnsuspend
{
    public const SCHEMA_TITLE = 'installation unsuspend event';
    public const SCHEMA_DESCRIPTION = '';
    private string $action;
    /**
     * An enterprise on GitHub.
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Enterprise::class)
     */
    private ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Enterprise $enterprise = null;
    /**
     * Installation
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Installation::class)
     */
    private \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Installation $installation;
    /**
     * A GitHub organization.
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\OrganizationSimple::class)
     */
    private ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\OrganizationSimple $organization = null;
    /**
     * An array of repository objects that the installation can access.
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WebhookInstallationUnsuspend\Repositories>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WebhookInstallationUnsuspend\Repositories::class)
     */
    private array $repositories = array();
    /**
     * A repository on GitHub.
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Repository::class)
     */
    private ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Repository $repository = null;
    private $requester;
    /**
     * A GitHub user.
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\SimpleUser::class)
     */
    private \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\SimpleUser $sender;
    public function action() : string
    {
        return $this->action;
    }
    /**
     * An enterprise on GitHub.
     */
    public function enterprise() : ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Enterprise
    {
        return $this->enterprise;
    }
    /**
     * Installation
     */
    public function installation() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Installation
    {
        return $this->installation;
    }
    /**
     * A GitHub organization.
     */
    public function organization() : ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\OrganizationSimple
    {
        return $this->organization;
    }
    /**
     * An array of repository objects that the installation can access.
     * @return array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WebhookInstallationUnsuspend\Repositories>
     */
    public function repositories() : array
    {
        return $this->repositories;
    }
    /**
     * A repository on GitHub.
     */
    public function repository() : ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Repository
    {
        return $this->repository;
    }
    public function requester()
    {
        return $this->requester;
    }
    /**
     * A GitHub user.
     */
    public function sender() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\SimpleUser
    {
        return $this->sender;
    }
}
