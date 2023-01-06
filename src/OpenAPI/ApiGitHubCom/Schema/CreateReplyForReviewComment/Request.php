<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CreateReplyForReviewComment;

final class Request
{
    public const SCHEMA_JSON = '{"required":["body"],"type":"object","properties":{"body":{"type":"string","description":"The text of the review comment."}}}';
    public const SCHEMA_TITLE = 'CreateReplyForReviewComment\\Request';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The text of the review comment.
     */
    private string $body;
    /**
     * The text of the review comment.
     */
    public function body() : string
    {
        return $this->body;
    }
}
