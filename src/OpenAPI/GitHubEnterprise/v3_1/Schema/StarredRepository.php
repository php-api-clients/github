<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema;

final class StarredRepository
{
    public const SCHEMA_TITLE       = 'Starred Repository';
    public const SCHEMA_DESCRIPTION = 'Starred Repository';
    private string $starred_at;
    /**
     * A git repository
     *
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Repository::class)
     */
    private Repository $repo = [];

    public function starred_at(): string
    {
        return $this->starred_at;
    }

    /**
     * A git repository
     */
    public function repo(): Repository
    {
        return $this->repo;
    }
}