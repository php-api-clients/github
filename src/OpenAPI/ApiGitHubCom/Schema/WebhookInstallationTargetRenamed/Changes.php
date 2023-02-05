<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WebhookInstallationTargetRenamed;

final class Changes
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"login":{"required":["from"],"type":"object","properties":{"from":{"type":"string"}}},"slug":{"required":["from"],"type":"object","properties":{"from":{"type":"string"}}}}}';
    public const SCHEMA_TITLE = 'WebhookInstallationTargetRenamed\\Changes';
    public const SCHEMA_DESCRIPTION = '';
    public readonly \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Changes\Login $login;
    public readonly \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Changes\Slug $slug;
    public function __construct(object $login, object $slug)
    {
        $this->login = $login;
        $this->slug = $slug;
    }
}
