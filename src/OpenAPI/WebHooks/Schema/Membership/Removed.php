<?php

namespace ApiClients\Client\Github\OpenAPI\WebHooks\Schema\Membership;

final class Removed
{
    public const SCHEMA_TITLE = 'membership removed event';
    public const SCHEMA_DESCRIPTION = '';
    private string $action;
    /**
     * The scope of the membership. Currently, can only be `team`.
     */
    private string $scope;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\WebHooks\Schema\User::class)
     */
    private \ApiClients\Client\Github\OpenAPI\WebHooks\Schema\User $member;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\WebHooks\Schema\User::class)
     */
    private \ApiClients\Client\Github\OpenAPI\WebHooks\Schema\User $sender;
    /**
     * The [team](https://docs.github.com/en/rest/reference/teams) for the membership.
     */
    private $team;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\WebHooks\Schema\Organization::class)
     */
    private \ApiClients\Client\Github\OpenAPI\WebHooks\Schema\Organization $organization;
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
     * The scope of the membership. Currently, can only be `team`.
     */
    public function scope() : string
    {
        return $this->scope;
    }
    public function member() : \ApiClients\Client\Github\OpenAPI\WebHooks\Schema\User
    {
        return $this->member;
    }
    public function sender() : \ApiClients\Client\Github\OpenAPI\WebHooks\Schema\User
    {
        return $this->sender;
    }
    /**
     * The [team](https://docs.github.com/en/rest/reference/teams) for the membership.
     */
    public function team()
    {
        return $this->team;
    }
    public function organization() : \ApiClients\Client\Github\OpenAPI\WebHooks\Schema\Organization
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
