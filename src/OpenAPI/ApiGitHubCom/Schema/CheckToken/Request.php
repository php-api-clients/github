<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CheckToken;

final class Request
{
    public const SCHEMA_JSON = '{"required":["access_token"],"type":"object","properties":{"access_token":{"type":"string","description":"The access_token of the OAuth application."}}}';
    public const SCHEMA_TITLE = 'CheckToken\\Request';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The access_token of the OAuth application.
     */
    private string $access_token;
    /**
     * The access_token of the OAuth application.
     */
    public function access_token() : string
    {
        return $this->access_token;
    }
}
