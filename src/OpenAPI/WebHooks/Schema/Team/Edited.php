<?php

namespace ApiClients\Client\Github\OpenAPI\WebHooks\Schema\Team;

final class Edited
{
    public const SCHEMA_TITLE = 'team edited event';
    public const SCHEMA_DESCRIPTION = '';
    private string $action;
    /**
     * The changes to the team if the action was `edited`.
     */
    private array $changes = array();
    /**
     * Groups of organization members that gives permissions on specified repositories.
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\WebHooks\Schema\Team::class)
     */
    private \ApiClients\Client\Github\OpenAPI\WebHooks\Schema\Team $team;
    /**
     * A git repository
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\WebHooks\Schema\Repository::class)
     */
    private \ApiClients\Client\Github\OpenAPI\WebHooks\Schema\Repository $repository = null;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\WebHooks\Schema\User::class)
     */
    private \ApiClients\Client\Github\OpenAPI\WebHooks\Schema\User $sender;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\WebHooks\Schema\Organization::class)
     */
    private \ApiClients\Client\Github\OpenAPI\WebHooks\Schema\Organization $organization;
    public function action() : string
    {
        return $this->action;
    }
    /**
     * The changes to the team if the action was `edited`.
     */
    public function changes() : array
    {
        return $this->changes;
    }
    /**
     * Groups of organization members that gives permissions on specified repositories.
     */
    public function team() : \ApiClients\Client\Github\OpenAPI\WebHooks\Schema\Team
    {
        return $this->team;
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
    public function organization() : \ApiClients\Client\Github\OpenAPI\WebHooks\Schema\Organization
    {
        return $this->organization;
    }
}
