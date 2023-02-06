<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WebhookPullRequestReviewCommentEdited;

final class Changes
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"body":{"required":["from"],"type":"object","properties":{"from":{"type":"string","description":"The previous version of the body."}}}},"description":"The changes to the comment."}';
    public const SCHEMA_EXAMPLE = '[]';
    public const SCHEMA_TITLE = 'WebhookPullRequestReviewCommentEdited\\Changes';
    public const SCHEMA_DESCRIPTION = 'The changes to the comment.';
    public readonly \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Changes\Body $body;
    public function __construct(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Changes\Body $body)
    {
        $this->body = $body;
    }
}
