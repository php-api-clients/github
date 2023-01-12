<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\UpdateReviewComment\Request\Application;

final class Json
{
    public const SCHEMA_JSON = '{"required":["body"],"type":"object","properties":{"body":{"type":"string","description":"The text of the reply to the review comment."}}}';
    public const SCHEMA_TITLE = 'UpdateReviewComment\\Request\\Application\\Json';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The text of the reply to the review comment.
     */
    private string $body;
    /**
     * The text of the reply to the review comment.
     */
    public function body() : string
    {
        return $this->body;
    }
}
