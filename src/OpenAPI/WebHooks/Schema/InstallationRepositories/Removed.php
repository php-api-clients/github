<?php

namespace ApiClients\Client\Github\OpenAPI\WebHooks\Schema\InstallationRepositories;

final class Removed
{
    public const SCHEMA_TITLE = 'installation_repositories removed event';
    public const SCHEMA_DESCRIPTION = '';
    private string $action;
    /**
     * The GitHub App installation.
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\WebHooks\Schema\Installation::class)
     */
    private \ApiClients\Client\Github\OpenAPI\WebHooks\Schema\Installation $installation;
    /**
     * Describe whether all repositories have been selected or there's a selection involved
     */
    private string $repository_selection;
    /**
     * An array of repository objects, which were added to the installation.
     * @var array<\ApiClients\Client\Github\OpenAPI\WebHooks\Schema\InstallationRepositories\Removed\RepositoriesAdded>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\WebHooks\Schema\InstallationRepositories\Removed\RepositoriesAdded::class)
     */
    private array $repositories_added = array();
    /**
     * An array of repository objects, which were removed from the installation.
     * @var array<\ApiClients\Client\Github\OpenAPI\WebHooks\Schema\InstallationRepositories\Removed\RepositoriesRemoved>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\WebHooks\Schema\InstallationRepositories\Removed\RepositoriesRemoved::class)
     */
    private array $repositories_removed = array();
    private $requester;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\WebHooks\Schema\User::class)
     */
    private \ApiClients\Client\Github\OpenAPI\WebHooks\Schema\User $sender;
    public function action() : string
    {
        return $this->action;
    }
    /**
     * The GitHub App installation.
     */
    public function installation() : \ApiClients\Client\Github\OpenAPI\WebHooks\Schema\Installation
    {
        return $this->installation;
    }
    /**
     * Describe whether all repositories have been selected or there's a selection involved
     */
    public function repository_selection() : string
    {
        return $this->repository_selection;
    }
    /**
     * An array of repository objects, which were added to the installation.
     * @return array<\ApiClients\Client\Github\OpenAPI\WebHooks\Schema\InstallationRepositories\Removed\RepositoriesAdded>
     */
    public function repositories_added() : array
    {
        return $this->repositories_added;
    }
    /**
     * An array of repository objects, which were removed from the installation.
     * @return array<\ApiClients\Client\Github\OpenAPI\WebHooks\Schema\InstallationRepositories\Removed\RepositoriesRemoved>
     */
    public function repositories_removed() : array
    {
        return $this->repositories_removed;
    }
    public function requester()
    {
        return $this->requester;
    }
    public function sender() : \ApiClients\Client\Github\OpenAPI\WebHooks\Schema\User
    {
        return $this->sender;
    }
}
