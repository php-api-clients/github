<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CheckToken\Request\Application;

final class Json
{
    public const SCHEMA_JSON = '{"required":["access_token"],"type":"object","properties":{"access_token":{"type":"string","description":"The access_token of the OAuth application."}}}';
    public const SCHEMA_EXAMPLE = '[]';
    public const SCHEMA_TITLE = 'CheckToken\\Request\\Application\\Json';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The access_token of the OAuth application.
     */
    public readonly string $access_token;
    public function __construct(string $access_token)
    {
        $this->access_token = $access_token;
    }
}
