<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema;

final class InstallationToken
{
    public const SCHEMA_TITLE = 'Installation Token';
    public const SCHEMA_DESCRIPTION = 'Authentication token for a GitHub App installed on a user or org.';
    private string $token;
    private string $expires_at;
    /**
     * The permissions granted to the user-to-server access token.
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\AppPermissions::class)
     */
    private ?\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\AppPermissions $permissions = null;
    private ?string $repository_selection = null;
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Repository>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Repository::class)
     */
    private array $repositories = array();
    private ?string $single_file = null;
    private ?bool $has_multiple_single_files = null;
    private array $single_file_paths = array();
    public function token() : string
    {
        return $this->token;
    }
    public function expires_at() : string
    {
        return $this->expires_at;
    }
    /**
     * The permissions granted to the user-to-server access token.
     */
    public function permissions() : ?\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\AppPermissions
    {
        return $this->permissions;
    }
    public function repository_selection() : ?string
    {
        return $this->repository_selection;
    }
    /**
     * @return array<\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Repository>
     */
    public function repositories() : array
    {
        return $this->repositories;
    }
    public function single_file() : ?string
    {
        return $this->single_file;
    }
    public function has_multiple_single_files() : ?bool
    {
        return $this->has_multiple_single_files;
    }
    public function single_file_paths() : array
    {
        return $this->single_file_paths;
    }
}
