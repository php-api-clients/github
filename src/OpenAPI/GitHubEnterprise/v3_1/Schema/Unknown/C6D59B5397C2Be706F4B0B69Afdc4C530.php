<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown;

final class C6D59B5397C2Be706F4B0B69Afdc4C530
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"scopes":{"type":"array","items":{"type":"string"},"description":"A list of [scopes](https:\\/\\/docs.github.com\\/enterprise-server@3.1\\/apps\\/building-oauth-apps\\/understanding-scopes-for-oauth-apps\\/)."}}}';
    public const SCHEMA_TITLE = 'c_6d59b5397c2be706f4b0b69afdc4c530';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * A list of [scopes](https://docs.github.com/enterprise-server@3.1/apps/building-oauth-apps/understanding-scopes-for-oauth-apps/).
     * @var array<\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\C6D59B5397C2Be706F4B0B69Afdc4C530\Scopes>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\C6D59B5397C2Be706F4B0B69Afdc4C530\Scopes::class)
     */
    private array $scopes = array();
    /**
     * A list of [scopes](https://docs.github.com/enterprise-server@3.1/apps/building-oauth-apps/understanding-scopes-for-oauth-apps/).
     * @return array<\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\C6D59B5397C2Be706F4B0B69Afdc4C530\Scopes>
     */
    public function scopes() : array
    {
        return $this->scopes;
    }
}
