<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class AuthenticationToken
{
    public const SCHEMA_TITLE = 'Authentication Token';
    public const SPL_HASH = '00000000084e08b60000000020f58f84';
    public const SCHEMA_DESCRIPTION = 'Authentication Token';
    /**
     * The token used for authentication
     */
    private ?string $token = null;
    /**
     * The time this token expires
     */
    private ?string $expires_at = null;
    private ?object $permissions = null;
    /**
     * The repositories this token has access to
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Repository>
     */
    private array $repositories = array();
    private ?string $single_file = null;
    /**
     * Describe whether all repositories have been selected or there's a selection involved
     */
    private ?string $repository_selection = null;
    public function token() : ?string
    {
        return $this->token;
    }
    public function expires_at() : ?string
    {
        return $this->expires_at;
    }
    public function permissions() : ?object
    {
        return $this->permissions;
    }
    public function repositories() : array
    {
        return $this->repositories;
    }
    public function single_file() : ?string
    {
        return $this->single_file;
    }
    public function repository_selection() : ?string
    {
        return $this->repository_selection;
    }
}
