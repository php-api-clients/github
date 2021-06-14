<?php

namespace ApiClients\Client\Github\OpenAPI\WebHooks\Schema\Organization;

final class MemberAdded
{
    public const SCHEMA_TITLE = 'organization member_added event';
    public const SCHEMA_DESCRIPTION = '';
    private string $action;
    /**
     * The membership between the user and the organization. Not present when the action is `member_invited`.
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\WebHooks\Schema\Membership::class)
     */
    private \ApiClients\Client\Github\OpenAPI\WebHooks\Schema\Membership $membership;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\WebHooks\Schema\User::class)
     */
    private \ApiClients\Client\Github\OpenAPI\WebHooks\Schema\User $sender;
    /**
     * Installation
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(?\ApiClients\Client\Github\OpenAPI\WebHooks\Schema\InstallationLite::class)
     */
    private ?\ApiClients\Client\Github\OpenAPI\WebHooks\Schema\InstallationLite $installation = null;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\WebHooks\Schema\Organization::class)
     */
    private \ApiClients\Client\Github\OpenAPI\WebHooks\Schema\Organization $organization;
    public function action() : string
    {
        return $this->action;
    }
    /**
     * The membership between the user and the organization. Not present when the action is `member_invited`.
     */
    public function membership() : \ApiClients\Client\Github\OpenAPI\WebHooks\Schema\Membership
    {
        return $this->membership;
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
    public function organization() : \ApiClients\Client\Github\OpenAPI\WebHooks\Schema\Organization
    {
        return $this->organization;
    }
}
