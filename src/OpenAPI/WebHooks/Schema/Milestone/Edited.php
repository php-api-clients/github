<?php

namespace ApiClients\Client\Github\OpenAPI\WebHooks\Schema\Milestone;

final class Edited
{
    public const SCHEMA_TITLE = 'milestone edited event';
    public const SCHEMA_DESCRIPTION = '';
    private string $action;
    /**
     * The changes to the milestone if the action was `edited`.
     */
    private array $changes = array();
    /**
     * A collection of related issues and pull requests.
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\WebHooks\Schema\Milestone::class)
     */
    private \ApiClients\Client\Github\OpenAPI\WebHooks\Schema\Milestone $milestone;
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
    public function action() : string
    {
        return $this->action;
    }
    /**
     * The changes to the milestone if the action was `edited`.
     */
    public function changes() : array
    {
        return $this->changes;
    }
    /**
     * A collection of related issues and pull requests.
     */
    public function milestone() : \ApiClients\Client\Github\OpenAPI\WebHooks\Schema\Milestone
    {
        return $this->milestone;
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
