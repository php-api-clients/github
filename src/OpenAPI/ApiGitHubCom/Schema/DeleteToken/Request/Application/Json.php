<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\DeleteToken\Request\Application;

final class Json
{
    public const SCHEMA_JSON = '{"required":["access_token"],"type":"object","properties":{"access_token":{"type":"string","description":"The OAuth access token used to authenticate to the GitHub API."}}}';
    public const SCHEMA_TITLE = 'DeleteToken\\Request\\Application\\Json';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The OAuth access token used to authenticate to the GitHub API.
     */
    public readonly string $access_token;
    public function __construct(string $access_token)
    {
        $this->access_token = $access_token;
    }
}
