<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\UpdateCommitComment\Request\Application;

final class Json
{
    public const SCHEMA_JSON = '{"required":["body"],"type":"object","properties":{"body":{"type":"string","description":"The contents of the comment"}}}';
    public const SCHEMA_TITLE = 'UpdateCommitComment\\Request\\Application\\Json';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The contents of the comment
     */
    public readonly string $body;
    public function __construct(string $body)
    {
        $this->body = $body;
    }
}
