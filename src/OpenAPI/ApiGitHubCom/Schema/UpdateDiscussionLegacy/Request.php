<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\UpdateDiscussionLegacy;

final class Request
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"title":{"type":"string","description":"The discussion post\'s title."},"body":{"type":"string","description":"The discussion post\'s body text."}}}';
    public const SCHEMA_TITLE = 'UpdateDiscussionLegacy\\Request';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The discussion post's title.
     */
    private string $title;
    /**
     * The discussion post's body text.
     */
    private string $body;
    /**
     * The discussion post's title.
     */
    public function title() : string
    {
        return $this->title;
    }
    /**
     * The discussion post's body text.
     */
    public function body() : string
    {
        return $this->body;
    }
}
