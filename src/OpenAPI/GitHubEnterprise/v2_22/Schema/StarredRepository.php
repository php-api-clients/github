<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Schema;

final class StarredRepository
{
    public const SCHEMA_TITLE = 'Starred Repository';
    public const SPL_HASH = '000000004a4bb3380000000021d13a21';
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
