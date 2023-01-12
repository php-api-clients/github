<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CreateComment\Request\Application;

final class Json
{
    public const SCHEMA_JSON = '{"required":["body"],"type":"object","properties":{"body":{"type":"string","description":"The contents of the comment."}}}';
    public const SCHEMA_TITLE = 'CreateComment\\Request\\Application\\Json';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The contents of the comment.
     */
    private string $body;
    /**
     * The contents of the comment.
     */
    public function body() : string
    {
        return $this->body;
    }
}
