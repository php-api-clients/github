<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WebhookDiscussionEdited;

final class Changes
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"body":{"required":["from"],"type":"object","properties":{"from":{"type":"string"}}},"title":{"required":["from"],"type":"object","properties":{"from":{"type":"string"}}}}}';
    public const SCHEMA_EXAMPLE = '[]';
    public const SCHEMA_TITLE = 'WebhookDiscussionEdited\\Changes';
    public const SCHEMA_DESCRIPTION = '';
    public readonly \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Changes\Body $body;
    public readonly \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Changes\Title $title;
    public function __construct(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Changes\Body $body, \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Changes\Title $title)
    {
        $this->body = $body;
        $this->title = $title;
    }
}
