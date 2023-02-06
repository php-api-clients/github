<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WebhookProjectEdited;

final class Changes
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"body":{"required":["from"],"type":"object","properties":{"from":{"type":"string","description":"The previous version of the body if the action was `edited`."}}},"name":{"required":["from"],"type":"object","properties":{"from":{"type":"string","description":"The changes to the project if the action was `edited`."}}}},"description":"The changes to the project if the action was `edited`."}';
    public const SCHEMA_EXAMPLE = '[]';
    public const SCHEMA_TITLE = 'WebhookProjectEdited\\Changes';
    public const SCHEMA_DESCRIPTION = 'The changes to the project if the action was `edited`.';
    public readonly \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Changes\Body $body;
    public readonly \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Changes\Name $name;
    public function __construct(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Changes\Body $body, \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Changes\Name $name)
    {
        $this->body = $body;
        $this->name = $name;
    }
}
