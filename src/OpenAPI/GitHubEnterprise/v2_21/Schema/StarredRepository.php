<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Schema;

final class StarredRepository
{
    public const SCHEMA_TITLE = 'Starred Repository';
    public const SCHEMA_DESCRIPTION = 'Starred Repository';
    private ?string $starred_at = null;
    /**
     * A git repository
     */
    private array $repo = array();
    public function starred_at() : ?string
    {
        return $this->starred_at;
    }
    public function repo() : array
    {
        return $this->repo;
    }
}
