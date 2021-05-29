<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Schema;

final class StarredRepository
{
    public const SCHEMA_TITLE       = 'Starred Repository';
    public const SCHEMA_DESCRIPTION = 'Starred Repository';
    private ?string $starred_at     = null;
    /**
     * A git repository
     *
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Schema\Repository::class)
     */
    private ?Repository $repo = null;

    public function starred_at(): ?string
    {
        return $this->starred_at;
    }

    public function repo(): ?Repository
    {
        return $this->repo;
    }
}
