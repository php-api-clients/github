<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WebhookDiscussionCommentEdited;

final class Changes
{
    public const SCHEMA_JSON = '{"required":["body"],"type":"object","properties":{"body":{"required":["from"],"type":"object","properties":{"from":{"type":"string"}}}}}';
    public const SCHEMA_EXAMPLE = '[]';
    public const SCHEMA_TITLE = 'WebhookDiscussionCommentEdited\\Changes';
    public const SCHEMA_DESCRIPTION = '';
    public readonly \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Changes\Body $body;
    public function __construct(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Changes\Body $body)
    {
        $this->body = $body;
    }
}
