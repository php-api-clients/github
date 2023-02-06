<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WebhookOrganizationRenamed;

final class Changes
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"login":{"type":"object","properties":{"from":{"type":"string"}}}}}';
    public const SCHEMA_EXAMPLE = '[]';
    public const SCHEMA_TITLE = 'WebhookOrganizationRenamed\\Changes';
    public const SCHEMA_DESCRIPTION = '';
    public readonly \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Changes\Login $login;
    public function __construct(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Changes\Login $login)
    {
        $this->login = $login;
    }
}
