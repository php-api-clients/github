<?php

namespace ApiClients\Client\Github\OpenAPI\WebHooks\Schema\PageBuild;

final class Event
{
    public const SCHEMA_TITLE = 'page_build event';
    public const SCHEMA_DESCRIPTION = 'Page Build';
    private int $id;
    /**
     * The [List GitHub Pages builds](https://docs.github.com/en/rest/reference/repos#list-github-pages-builds) itself.
     */
    private array $build = array();
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
    private \ApiClients\Client\Github\OpenAPI\WebHooks\Schema\InstallationLite $installation = null;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\WebHooks\Schema\Organization::class)
     */
    private \ApiClients\Client\Github\OpenAPI\WebHooks\Schema\Organization $organization = null;
    public function id() : int
    {
        return $this->id;
    }
    /**
     * The [List GitHub Pages builds](https://docs.github.com/en/rest/reference/repos#list-github-pages-builds) itself.
     */
    public function build() : array
    {
        return $this->build;
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
    public function installation() : \ApiClients\Client\Github\OpenAPI\WebHooks\Schema\InstallationLite
    {
        return $this->installation;
    }
    public function organization() : \ApiClients\Client\Github\OpenAPI\WebHooks\Schema\Organization
    {
        return $this->organization;
    }
}
