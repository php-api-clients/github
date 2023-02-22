<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Pulls\UpdateReview\Request;

final readonly class Applicationjson
{
    public const SCHEMA_JSON = '{"required":["body"],"type":"object","properties":{"body":{"type":"string","description":"The body text of the pull request review."}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The body text of the pull request review.
     */
    public ?string $body;
    public function __construct(string $body)
    {
        $this->body = $body;
    }
}
