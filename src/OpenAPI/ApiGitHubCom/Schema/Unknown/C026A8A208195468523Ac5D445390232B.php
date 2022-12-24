<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown;

final class C026A8A208195468523Ac5D445390232B
{
    public const SCHEMA_JSON = '{"required":["body"],"type":"object","properties":{"body":{"type":"string","description":"The contents of the comment."}}}';
    public const SCHEMA_TITLE = 'c_026a8a208195468523ac5d445390232b';
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
