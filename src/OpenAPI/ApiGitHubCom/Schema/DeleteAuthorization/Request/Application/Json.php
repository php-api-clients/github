<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\DeleteAuthorization\Request\Application;

final class Json
{
    public const SCHEMA_JSON = '{"required":["access_token"],"type":"object","properties":{"access_token":{"type":"string","description":"The OAuth access token used to authenticate to the GitHub API."}}}';
    public const SCHEMA_TITLE = 'DeleteAuthorization\\Request\\Application\\Json';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The OAuth access token used to authenticate to the GitHub API.
     */
    private string $access_token;
    /**
     * The OAuth access token used to authenticate to the GitHub API.
     */
    public function access_token() : string
    {
        return $this->access_token;
    }
}
