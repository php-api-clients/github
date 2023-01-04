<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\WebhookPullRequestReviewCommentEdited;

final class Changes
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"body":{"required":["from"],"type":"object","properties":{"from":{"type":"string","description":"The previous version of the body."}}}},"description":"The changes to the comment."}';
    public const SCHEMA_TITLE = 'WebhookPullRequestReviewCommentEdited\\Changes';
    public const SCHEMA_DESCRIPTION = 'The changes to the comment.';
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Changes\Body::class)
     */
    private \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Changes\Body $body;
    public function body() : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Changes\Body
    {
        return $this->body;
    }
}
