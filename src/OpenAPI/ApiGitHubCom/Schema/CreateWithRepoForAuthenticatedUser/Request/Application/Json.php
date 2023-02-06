<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CreateWithRepoForAuthenticatedUser\Request\Application;

final class Json
{
    public const SCHEMA_JSON = '{"type":["object","null"],"properties":{"ref":{"type":"string","description":"Git ref (typically a branch name) for this codespace"},"location":{"type":"string","description":"Location for this codespace. Assigned by IP if not provided"},"client_ip":{"type":"string","description":"IP for location auto-detection when proxying a request"},"machine":{"type":"string","description":"Machine type to use for this codespace"},"devcontainer_path":{"type":"string","description":"Path to devcontainer.json config to use for this codespace"},"multi_repo_permissions_opt_out":{"type":"boolean","description":"Whether to authorize requested permissions from devcontainer.json"},"working_directory":{"type":"string","description":"Working directory for this codespace"},"idle_timeout_minutes":{"type":"integer","description":"Time in minutes before codespace stops from inactivity"},"display_name":{"type":"string","description":"Display name for this codespace"},"retention_period_minutes":{"type":"integer","description":"Duration in minutes after codespace has gone idle in which it will be deleted. Must be integer minutes between 0 and 43200 (30 days)."}}}';
    public const SCHEMA_EXAMPLE = '[]';
    public const SCHEMA_TITLE = 'CreateWithRepoForAuthenticatedUser\\Request\\Application\\Json';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * Git ref (typically a branch name) for this codespace
     */
    public readonly string $ref;
    /**
     * Location for this codespace. Assigned by IP if not provided
     */
    public readonly string $location;
    /**
     * IP for location auto-detection when proxying a request
     */
    public readonly string $client_ip;
    /**
     * Machine type to use for this codespace
     */
    public readonly string $machine;
    /**
     * Path to devcontainer.json config to use for this codespace
     */
    public readonly string $devcontainer_path;
    /**
     * Whether to authorize requested permissions from devcontainer.json
     */
    public readonly bool $multi_repo_permissions_opt_out;
    /**
     * Working directory for this codespace
     */
    public readonly string $working_directory;
    /**
     * Time in minutes before codespace stops from inactivity
     */
    public readonly int $idle_timeout_minutes;
    /**
     * Display name for this codespace
     */
    public readonly string $display_name;
    /**
     * Duration in minutes after codespace has gone idle in which it will be deleted. Must be integer minutes between 0 and 43200 (30 days).
     */
    public readonly int $retention_period_minutes;
    public function __construct(string $ref, string $location, string $client_ip, string $machine, string $devcontainer_path, bool $multi_repo_permissions_opt_out, string $working_directory, int $idle_timeout_minutes, string $display_name, int $retention_period_minutes)
    {
        $this->ref = $ref;
        $this->location = $location;
        $this->client_ip = $client_ip;
        $this->machine = $machine;
        $this->devcontainer_path = $devcontainer_path;
        $this->multi_repo_permissions_opt_out = $multi_repo_permissions_opt_out;
        $this->working_directory = $working_directory;
        $this->idle_timeout_minutes = $idle_timeout_minutes;
        $this->display_name = $display_name;
        $this->retention_period_minutes = $retention_period_minutes;
    }
}
