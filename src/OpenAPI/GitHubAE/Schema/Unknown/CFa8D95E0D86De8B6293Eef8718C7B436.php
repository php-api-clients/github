<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown;

final class CFa8D95E0D86De8B6293Eef8718C7B436
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"scopes":{"type":"array","items":{"type":"string"},"description":"A list of [scopes](https:\\/\\/docs.github.com\\/github-ae@latest\\/apps\\/building-oauth-apps\\/understanding-scopes-for-oauth-apps\\/)."}}}';
    public const SCHEMA_TITLE = 'c_fa8d95e0d86de8b6293eef8718c7b436';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * A list of [scopes](https://docs.github.com/github-ae@latest/apps/building-oauth-apps/understanding-scopes-for-oauth-apps/).
     * @var array<\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\CFa8D95E0D86De8B6293Eef8718C7B436\Scopes>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\CFa8D95E0D86De8B6293Eef8718C7B436\Scopes::class)
     */
    private array $scopes = array();
    /**
     * A list of [scopes](https://docs.github.com/github-ae@latest/apps/building-oauth-apps/understanding-scopes-for-oauth-apps/).
     * @return array<\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\CFa8D95E0D86De8B6293Eef8718C7B436\Scopes>
     */
    public function scopes() : array
    {
        return $this->scopes;
    }
}
