<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Schema;

final class Stargazer
{
    public const SCHEMA_TITLE = 'Stargazer';
    public const SCHEMA_DESCRIPTION = 'Stargazer';
    private string $starred_at;
    /**
     * Simple User
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Schema\NullableSimpleUser::class)
     */
    private ?\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Schema\NullableSimpleUser $user = null;
    public function starred_at() : string
    {
        return $this->starred_at;
    }
    /**
     * Simple User
     */
    public function user() : ?\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Schema\NullableSimpleUser
    {
        return $this->user;
    }
}
