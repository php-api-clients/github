<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class InstallationToken
{
    public const SCHEMA_TITLE = 'Installation Token';
    public const SCHEMA_DESCRIPTION = 'Authentication token for a GitHub App installed on a user or org.';
    private string $token;
    private string $expires_at;
    private array $permissions = array();
    private string $repository_selection;
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Repository>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Repository::class)
     */
    private array $repositories = array();
    private string $single_file;
    private bool $has_multiple_single_files;
    private array $single_file_paths = array();
    public function token() : string
    {
        return $this->token;
    }
    public function expires_at() : string
    {
        return $this->expires_at;
    }
    public function permissions() : array
    {
        return $this->permissions;
    }
    public function repository_selection() : string
    {
        return $this->repository_selection;
    }
    /**
     * @return array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Repository>
     */
    public function repositories() : array
    {
        return $this->repositories;
    }
    public function single_file() : string
    {
        return $this->single_file;
    }
    public function has_multiple_single_files() : bool
    {
        return $this->has_multiple_single_files;
    }
    public function single_file_paths() : array
    {
        return $this->single_file_paths;
    }
}
