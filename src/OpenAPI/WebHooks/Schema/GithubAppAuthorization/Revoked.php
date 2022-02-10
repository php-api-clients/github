<?php

namespace ApiClients\Client\Github\OpenAPI\WebHooks\Schema\GithubAppAuthorization;

final class Revoked
{
    public const SCHEMA_TITLE = 'github_app_authorization revoked event';
    public const SCHEMA_DESCRIPTION = '';
    private string $action;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\WebHooks\Schema\User::class)
     */
    private \ApiClients\Client\Github\OpenAPI\WebHooks\Schema\User $sender;
    public function action() : string
    {
        return $this->action;
    }
    public function sender() : \ApiClients\Client\Github\OpenAPI\WebHooks\Schema\User
    {
        return $this->sender;
    }
}
