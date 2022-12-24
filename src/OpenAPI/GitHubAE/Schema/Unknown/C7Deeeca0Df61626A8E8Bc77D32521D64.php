<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown;

final class C7Deeeca0Df61626A8E8Bc77D32521D64
{
    public const SCHEMA_JSON = '{"type":["object","null"],"properties":{"organization":{"type":"string","description":"Optional parameter to specify the organization name if forking into an organization."}}}';
    public const SCHEMA_TITLE = 'c_7deeeca0df61626a8e8bc77d32521d64';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * Optional parameter to specify the organization name if forking into an organization.
     */
    private string $organization;
    /**
     * Optional parameter to specify the organization name if forking into an organization.
     */
    public function organization() : string
    {
        return $this->organization;
    }
}
