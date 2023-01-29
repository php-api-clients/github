<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\UpdateDiscussionLegacy\Request\Application;

final class Json
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"title":{"type":"string","description":"The discussion post\'s title."},"body":{"type":"string","description":"The discussion post\'s body text."}}}';
    public const SCHEMA_TITLE = 'UpdateDiscussionLegacy\\Request\\Application\\Json';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The discussion post's title.
     */
    public readonly string $title;
    /**
     * The discussion post's body text.
     */
    public readonly string $body;
    public function __construct(string $title, string $body)
    {
        $this->title = $title;
        $this->body = $body;
    }
}
