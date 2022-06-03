<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Schema;

final class StarredRepository
{
    public const SCHEMA_TITLE = 'Starred Repository';
    public const SCHEMA_DESCRIPTION = 'Starred Repository';
    private string $starred_at;
    /**
     * A git repository
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Schema\Repository::class)
     */
    private \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Schema\Repository $repo;
    public function starred_at() : string
    {
        return $this->starred_at;
    }
    /**
     * A git repository
     */
    public function repo() : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Schema\Repository
    {
        return $this->repo;
    }
}
