<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class StarredRepository
{
    public const SCHEMA_TITLE = 'Starred Repository';
    public const SPL_HASH = '00000000252f4cda0000000029de5079';
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
