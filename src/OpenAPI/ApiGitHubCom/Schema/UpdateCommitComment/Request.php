<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\UpdateCommitComment;

final class Request
{
    public const SCHEMA_JSON = '{"required":["body"],"type":"object","properties":{"body":{"type":"string","description":"The contents of the comment"}}}';
    public const SCHEMA_TITLE = 'UpdateCommitComment\\Request';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The contents of the comment
     */
    private string $body;
    /**
     * The contents of the comment
     */
    public function body() : string
    {
        return $this->body;
    }
}
