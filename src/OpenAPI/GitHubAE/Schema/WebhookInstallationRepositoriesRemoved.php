<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema;

final class WebhookInstallationRepositoriesRemoved
{
    public const SCHEMA_TITLE = 'installation_repositories removed event';
    public const SCHEMA_DESCRIPTION = '';
    private string $action;
    /**
     * An enterprise on GitHub.
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Enterprise::class)
     */
    private ?\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Enterprise $enterprise = null;
    /**
     * Installation
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Installation::class)
     */
    private \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Installation $installation;
    /**
     * A GitHub organization.
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\OrganizationSimple::class)
     */
    private ?\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\OrganizationSimple $organization = null;
    /**
     * An array of repository objects, which were added to the installation.
     * @var array<\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\WebhookInstallationRepositoriesRemoved\RepositoriesAdded>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\WebhookInstallationRepositoriesRemoved\RepositoriesAdded::class)
     */
    private array $repositories_added = array();
    /**
     * An array of repository objects, which were removed from the installation.
     * @var array<\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\WebhookInstallationRepositoriesRemoved\RepositoriesRemoved>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\WebhookInstallationRepositoriesRemoved\RepositoriesRemoved::class)
     */
    private array $repositories_removed = array();
    /**
     * A repository on GitHub.
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Repository::class)
     */
    private ?\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Repository $repository = null;
    /**
     * Describe whether all repositories have been selected or there's a selection involved
     */
    private string $repository_selection;
    private $requester;
    /**
     * A GitHub user.
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\SimpleUser::class)
     */
    private \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\SimpleUser $sender;
    public function action() : string
    {
        return $this->action;
    }
    /**
     * An enterprise on GitHub.
     */
    public function enterprise() : ?\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Enterprise
    {
        return $this->enterprise;
    }
    /**
     * Installation
     */
    public function installation() : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Installation
    {
        return $this->installation;
    }
    /**
     * A GitHub organization.
     */
    public function organization() : ?\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\OrganizationSimple
    {
        return $this->organization;
    }
    /**
     * An array of repository objects, which were added to the installation.
     * @return array<\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\WebhookInstallationRepositoriesRemoved\RepositoriesAdded>
     */
    public function repositories_added() : array
    {
        return $this->repositories_added;
    }
    /**
     * An array of repository objects, which were removed from the installation.
     * @return array<\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\WebhookInstallationRepositoriesRemoved\RepositoriesRemoved>
     */
    public function repositories_removed() : array
    {
        return $this->repositories_removed;
    }
    /**
     * A repository on GitHub.
     */
    public function repository() : ?\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Repository
    {
        return $this->repository;
    }
    /**
     * Describe whether all repositories have been selected or there's a selection involved
     */
    public function repository_selection() : string
    {
        return $this->repository_selection;
    }
    public function requester()
    {
        return $this->requester;
    }
    /**
     * A GitHub user.
     */
    public function sender() : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\SimpleUser
    {
        return $this->sender;
    }
}
