<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CreateReplyForReviewComment\Request\Application;

final class Json
{
    public const SCHEMA_JSON = '{"required":["body"],"type":"object","properties":{"body":{"type":"string","description":"The text of the review comment."}}}';
    public const SCHEMA_TITLE = 'CreateReplyForReviewComment\\Request\\Application\\Json';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The text of the review comment.
     */
    public readonly string $body;
    public function __construct(string $body)
    {
        $this->body = $body;
    }
}
