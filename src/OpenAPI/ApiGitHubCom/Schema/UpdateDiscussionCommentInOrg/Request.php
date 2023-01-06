<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\UpdateDiscussionCommentInOrg;

final class Request
{
    public const SCHEMA_JSON = '{"required":["body"],"type":"object","properties":{"body":{"type":"string","description":"The discussion comment\'s body text."}}}';
    public const SCHEMA_TITLE = 'UpdateDiscussionCommentInOrg\\Request';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The discussion comment's body text.
     */
    private string $body;
    /**
     * The discussion comment's body text.
     */
    public function body() : string
    {
        return $this->body;
    }
}
