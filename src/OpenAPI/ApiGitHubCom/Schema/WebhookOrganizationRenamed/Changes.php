<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WebhookOrganizationRenamed;

final class Changes
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"login":{"type":"object","properties":{"from":{"type":"string"}}}}}';
    public const SCHEMA_TITLE = 'WebhookOrganizationRenamed\\Changes';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Changes\Login::class)
     */
    private \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Changes\Login $login;
    public function login() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Changes\Login
    {
        return $this->login;
    }
}
