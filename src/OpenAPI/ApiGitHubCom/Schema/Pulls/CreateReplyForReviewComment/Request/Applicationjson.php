<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Pulls\CreateReplyForReviewComment\Request;

final readonly class Applicationjson
{
    public const SCHEMA_JSON        = '{"required":["body"],"type":"object","properties":{"body":{"type":"string","description":"The text of the review comment."}}}';
    public const SCHEMA_TITLE       = '';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The text of the review comment.
     */
    public ?string $body;

    public function __construct(string $body)
    {
        $this->body = $body;
    }
}
