<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class StarredRepository
{
    public const SCHEMA_TITLE = 'Starred Repository';
    public const SCHEMA_DESCRIPTION = 'Starred Repository';
    private string $starred_at;
    /**
     * A repository on GitHub.
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Repository::class)
     */
    private \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Repository $repo;
    public function starred_at() : string
    {
        return $this->starred_at;
    }
    /**
     * A repository on GitHub.
     */
    public function repo() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Repository
    {
        return $this->repo;
    }
}
