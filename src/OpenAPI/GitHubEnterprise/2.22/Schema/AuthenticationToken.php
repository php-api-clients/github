<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.22\Schema;

final class AuthenticationToken
{
    public const SCHEMA_TITLE = 'Authentication Token';
    public const SCHEMA_DESCRIPTION = 'Authentication Token';
    /**The token used for authentication**/
    private string $token;
    /**The time this token expires**/
    private string $expires_at;
    private object $permissions;
    /**The repositories this token has access to**/
    private array $repositories;
    private string $single_file;
    /**Describe whether all repositories have been selected or there's a selection involved**/
    private string $repository_selection;
    public function token() : string
    {
        return $this->token;
    }
    public function expires_at() : string
    {
        return $this->expires_at;
    }
    public function permissions() : object
    {
        return $this->permissions;
    }
    public function repositories() : array
    {
        return $this->repositories;
    }
    public function single_file() : string
    {
        return $this->single_file;
    }
    public function repository_selection() : string
    {
        return $this->repository_selection;
    }
}
