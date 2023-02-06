<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\UpdateDiscussionCommentLegacy\Request\Application;

final class Json
{
    public const SCHEMA_JSON = '{"required":["body"],"type":"object","properties":{"body":{"type":"string","description":"The discussion comment\'s body text."}}}';
    public const SCHEMA_EXAMPLE = '[]';
    public const SCHEMA_TITLE = 'UpdateDiscussionCommentLegacy\\Request\\Application\\Json';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The discussion comment's body text.
     */
    public readonly string $body;
    public function __construct(string $body)
    {
        $this->body = $body;
    }
}
