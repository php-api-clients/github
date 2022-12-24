<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown;

final class C2Dbed61576F45C59F4188D6A2D5A4Ed4
{
    public const SCHEMA_JSON = '{"required":["body"],"type":"object","properties":{"body":{"type":"string","description":"The discussion comment\'s body text."}}}';
    public const SCHEMA_TITLE = 'c_2dbed61576f45c59f4188d6a2d5a4ed4';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The discussion comment's body text.
     */
    private string $body;
    /**
     * The discussion comment's body text.
     */
    public function body() : string
    {
        return $this->body;
    }
}
