<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\UpdateReview\Request\Application;

final class Json
{
    public const SCHEMA_JSON = '{"required":["body"],"type":"object","properties":{"body":{"type":"string","description":"The body text of the pull request review."}}}';
    public const SCHEMA_TITLE = 'UpdateReview\\Request\\Application\\Json';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The body text of the pull request review.
     */
    public readonly string $body;
    public function __construct(string $body)
    {
        $this->body = $body;
    }
}
