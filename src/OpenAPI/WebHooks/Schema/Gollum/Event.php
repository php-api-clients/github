<?php

namespace ApiClients\Client\Github\OpenAPI\WebHooks\Schema\Gollum;

final class Event
{
    public const SCHEMA_TITLE = 'gollum event';
    public const SCHEMA_DESCRIPTION = 'A wiki page is created or updated.';
    /**
     * The pages that were updated.
     * @var array<\ApiClients\Client\Github\OpenAPI\WebHooks\Schema\Gollum\Event\Pages>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\WebHooks\Schema\Gollum\Event\Pages::class)
     */
    private array $pages = array();
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
    /**
     * The pages that were updated.
     * @return array<\ApiClients\Client\Github\OpenAPI\WebHooks\Schema\Gollum\Event\Pages>
     */
    public function pages() : array
    {
        return $this->pages;
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
