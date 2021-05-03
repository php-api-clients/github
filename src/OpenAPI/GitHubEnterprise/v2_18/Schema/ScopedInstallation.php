<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Schema;

final class ScopedInstallation
{
    public const SCHEMA_TITLE = 'Scoped Installation';
    public const SPL_HASH = '000000004679df830000000066e19307';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The permissions granted to the user-to-server access token.
     */
    private ?object $permissions = null;
    /**
     * Describe whether all repositories have been selected or there's a selection involved
     */
    private ?string $repository_selection = null;
    private ?string $single_file_name = null;
    private ?bool $has_multiple_single_files = null;
    private array $single_file_paths = array();
    private ?string $repositories_url = null;
    /**
     * Simple User
     */
    private ?object $account = null;
    public function permissions() : ?object
    {
        return $this->permissions;
    }
    public function repository_selection() : ?string
    {
        return $this->repository_selection;
    }
    public function single_file_name() : ?string
    {
        return $this->single_file_name;
    }
    public function has_multiple_single_files() : ?bool
    {
        return $this->has_multiple_single_files;
    }
    public function single_file_paths() : array
    {
        return $this->single_file_paths;
    }
    public function repositories_url() : ?string
    {
        return $this->repositories_url;
    }
    public function account() : ?object
    {
        return $this->account;
    }
}
