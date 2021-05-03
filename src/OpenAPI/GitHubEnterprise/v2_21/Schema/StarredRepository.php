<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Schema;

final class StarredRepository
{
    public const SCHEMA_TITLE = 'Starred Repository';
    public const SPL_HASH = '0000000018142a4e000000005f691719';
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
