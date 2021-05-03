<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Schema;

final class StarredRepository
{
    public const SCHEMA_TITLE = 'Starred Repository';
    public const SPL_HASH = '00000000269f3a2c00000000005e85e5';
    public const SCHEMA_DESCRIPTION = 'Starred Repository';
    private ?string $starred_at = null;
    /**
     * A git repository
     */
    private ?object $repo = null;
    public function starred_at() : ?string
    {
        return $this->starred_at;
    }
    public function repo() : ?object
    {
        return $this->repo;
    }
}
