<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WebhookInstallationTargetRenamed;

final class Changes
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"login":{"required":["from"],"type":"object","properties":{"from":{"type":"string"}}},"slug":{"required":["from"],"type":"object","properties":{"from":{"type":"string"}}}}}';
    public const SCHEMA_TITLE = 'WebhookInstallationTargetRenamed\\Changes';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Changes\Login::class)
     */
    private \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Changes\Login $login;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Changes\Slug::class)
     */
    private \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Changes\Slug $slug;
    public function login() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Changes\Login
    {
        return $this->login;
    }
    public function slug() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Changes\Slug
    {
        return $this->slug;
    }
}
