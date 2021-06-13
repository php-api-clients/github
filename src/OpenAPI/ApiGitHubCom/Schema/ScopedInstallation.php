<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class ScopedInstallation
{
    public const SCHEMA_TITLE = 'Scoped Installation';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The permissions granted to the user-to-server access token.
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\AppPermissions::class)
     */
    private \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\AppPermissions $permissions;
    /**
     * Describe whether all repositories have been selected or there's a selection involved
     */
    private string $repository_selection;
    private string $single_file_name;
    private bool $has_multiple_single_files;
    private array $single_file_paths = array();
    private string $repositories_url;
    /**
     * Simple User
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\SimpleUser::class)
     */
    private \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\SimpleUser $account;
    /**
     * The permissions granted to the user-to-server access token.
     */
    public function permissions() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\AppPermissions
    {
        return $this->permissions;
    }
    /**
     * Describe whether all repositories have been selected or there's a selection involved
     */
    public function repository_selection() : string
    {
        return $this->repository_selection;
    }
    public function single_file_name() : string
    {
        return $this->single_file_name;
    }
    public function has_multiple_single_files() : bool
    {
        return $this->has_multiple_single_files;
    }
    public function single_file_paths() : array
    {
        return $this->single_file_paths;
    }
    public function repositories_url() : string
    {
        return $this->repositories_url;
    }
    /**
     * Simple User
     */
    public function account() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\SimpleUser
    {
        return $this->account;
    }
}
