<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Schema;

final class StarredRepository
{
    public const SCHEMA_TITLE = 'Starred Repository';
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
