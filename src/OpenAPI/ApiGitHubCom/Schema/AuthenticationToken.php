<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class AuthenticationToken
{
    public const SCHEMA_TITLE = 'Authentication Token';
    public const SCHEMA_DESCRIPTION = 'Authentication Token';
    /**
     * The token used for authentication
     */
    private string $token;
    /**
     * The time this token expires
     */
    private string $expires_at;
    private ?array $permissions = array();
    /**
     * The repositories this token has access to
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Repository>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Repository::class)
     */
    private ?array $repositories = array();
    private ?string $single_file = null;
    /**
     * Describe whether all repositories have been selected or there's a selection involved
     */
    private ?string $repository_selection = null;
    /**
     * The token used for authentication
     */
    public function token() : string
    {
        return $this->token;
    }
    /**
     * The time this token expires
     */
    public function expires_at() : string
    {
        return $this->expires_at;
    }
    public function permissions() : ?array
    {
        return $this->permissions;
    }
    /**
     * The repositories this token has access to
     * @return array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Repository>
     */
    public function repositories() : ?array
    {
        return $this->repositories;
    }
    public function single_file() : ?string
    {
        return $this->single_file;
    }
    /**
     * Describe whether all repositories have been selected or there's a selection involved
     */
    public function repository_selection() : ?string
    {
        return $this->repository_selection;
    }
}
