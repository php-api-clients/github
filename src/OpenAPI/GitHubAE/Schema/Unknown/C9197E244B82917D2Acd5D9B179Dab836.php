<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown;

final class C9197E244B82917D2Acd5D9B179Dab836
{
    public const SCHEMA_JSON = '{"required":["access_token"],"type":"object","properties":{"access_token":{"type":"string","description":"The OAuth access token used to authenticate to the GitHub API."}}}';
    public const SCHEMA_TITLE = 'c_9197e244b82917d2acd5d9b179dab836';
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
