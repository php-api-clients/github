<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WebhookIssueCommentEdited;

final class Changes
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"body":{"required":["from"],"type":"object","properties":{"from":{"type":"string","description":"The previous version of the body."}}}},"description":"The changes to the comment."}';
    public const SCHEMA_TITLE = 'WebhookIssueCommentEdited\\Changes';
    public const SCHEMA_DESCRIPTION = 'The changes to the comment.';
    public readonly \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Changes\Body $body;
    public function __construct(object $body)
    {
        $this->body = $body;
    }
}
