<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Schema;

final class StarredRepository
{
    public const SCHEMA_TITLE = 'Starred Repository';
    public const SPL_HASH = '0000000065dd74ed000000006352672d';
    public const SCHEMA_DESCRIPTION = 'Starred Repository';
    private string $starred_at;
    /**
     * A git repository
     */
    private object $repo;
    public function starred_at() : string
    {
        return $this->starred_at;
    }
    public function repo() : object
    {
        return $this->repo;
    }
}
