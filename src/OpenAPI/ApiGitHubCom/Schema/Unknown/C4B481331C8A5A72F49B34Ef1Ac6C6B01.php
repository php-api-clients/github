<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown;

final class C4B481331C8A5A72F49B34Ef1Ac6C6B01
{
    public const SCHEMA_JSON = '{"type":["object","null"],"properties":{"ref":{"type":"string","description":"Git ref (typically a branch name) for this codespace"},"location":{"type":"string","description":"Location for this codespace. Assigned by IP if not provided"},"client_ip":{"type":"string","description":"IP for location auto-detection when proxying a request"},"machine":{"type":"string","description":"Machine type to use for this codespace"},"devcontainer_path":{"type":"string","description":"Path to devcontainer.json config to use for this codespace"},"multi_repo_permissions_opt_out":{"type":"boolean","description":"Whether to authorize requested permissions from devcontainer.json"},"working_directory":{"type":"string","description":"Working directory for this codespace"},"idle_timeout_minutes":{"type":"integer","description":"Time in minutes before codespace stops from inactivity"},"display_name":{"type":"string","description":"Display name for this codespace"},"retention_period_minutes":{"type":"integer","description":"Duration in minutes after codespace has gone idle in which it will be deleted. Must be integer minutes between 0 and 43200 (30 days)."}}}';
    public const SCHEMA_TITLE = 'c_4b481331c8a5a72f49b34ef1ac6c6b01';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * Git ref (typically a branch name) for this codespace
     */
    private string $ref;
    /**
     * Location for this codespace. Assigned by IP if not provided
     */
    private string $location;
    /**
     * IP for location auto-detection when proxying a request
     */
    private string $client_ip;
    /**
     * Machine type to use for this codespace
     */
    private string $machine;
    /**
     * Path to devcontainer.json config to use for this codespace
     */
    private string $devcontainer_path;
    /**
     * Whether to authorize requested permissions from devcontainer.json
     */
    private bool $multi_repo_permissions_opt_out;
    /**
     * Working directory for this codespace
     */
    private string $working_directory;
    /**
     * Time in minutes before codespace stops from inactivity
     */
    private int $idle_timeout_minutes;
    /**
     * Display name for this codespace
     */
    private string $display_name;
    /**
     * Duration in minutes after codespace has gone idle in which it will be deleted. Must be integer minutes between 0 and 43200 (30 days).
     */
    private int $retention_period_minutes;
    /**
     * Git ref (typically a branch name) for this codespace
     */
    public function ref() : string
    {
        return $this->ref;
    }
    /**
     * Location for this codespace. Assigned by IP if not provided
     */
    public function location() : string
    {
        return $this->location;
    }
    /**
     * IP for location auto-detection when proxying a request
     */
    public function client_ip() : string
    {
        return $this->client_ip;
    }
    /**
     * Machine type to use for this codespace
     */
    public function machine() : string
    {
        return $this->machine;
    }
    /**
     * Path to devcontainer.json config to use for this codespace
     */
    public function devcontainer_path() : string
    {
        return $this->devcontainer_path;
    }
    /**
     * Whether to authorize requested permissions from devcontainer.json
     */
    public function multi_repo_permissions_opt_out() : bool
    {
        return $this->multi_repo_permissions_opt_out;
    }
    /**
     * Working directory for this codespace
     */
    public function working_directory() : string
    {
        return $this->working_directory;
    }
    /**
     * Time in minutes before codespace stops from inactivity
     */
    public function idle_timeout_minutes() : int
    {
        return $this->idle_timeout_minutes;
    }
    /**
     * Display name for this codespace
     */
    public function display_name() : string
    {
        return $this->display_name;
    }
    /**
     * Duration in minutes after codespace has gone idle in which it will be deleted. Must be integer minutes between 0 and 43200 (30 days).
     */
    public function retention_period_minutes() : int
    {
        return $this->retention_period_minutes;
    }
}
