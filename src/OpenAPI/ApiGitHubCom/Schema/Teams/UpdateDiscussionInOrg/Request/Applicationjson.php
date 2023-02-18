<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Teams\UpdateDiscussionInOrg\Request;

final readonly class Applicationjson
{
    public const SCHEMA_JSON        = '{"type":"object","properties":{"title":{"type":"string","description":"The discussion post\'s title."},"body":{"type":"string","description":"The discussion post\'s body text."}}}';
    public const SCHEMA_TITLE       = '';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The discussion post's title.
     */
    public ?string $title;
    /**
     * The discussion post's body text.
     */
    public ?string $body;

    public function __construct(string $title, string $body)
    {
        $this->title = $title;
        $this->body  = $body;
    }
}
