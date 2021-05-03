<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Schema;

final class StarredRepository
{
    public const SCHEMA_TITLE = 'Starred Repository';
    public const SPL_HASH = '0000000045a09aeb0000000057b08344';
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
