<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown;

final class CC571F3615F4897Bcdabd86E499Cbf2B7
{
    public const SCHEMA_JSON = '{"oneOf":[{"required":["repository_id"],"type":"object","properties":{"repository_id":{"type":"integer","description":"Repository id for this codespace"},"ref":{"type":"string","description":"Git ref (typically a branch name) for this codespace"},"location":{"type":"string","description":"Location for this codespace. Assigned by IP if not provided"},"client_ip":{"type":"string","description":"IP for location auto-detection when proxying a request"},"machine":{"type":"string","description":"Machine type to use for this codespace"},"devcontainer_path":{"type":"string","description":"Path to devcontainer.json config to use for this codespace"},"multi_repo_permissions_opt_out":{"type":"boolean","description":"Whether to authorize requested permissions from devcontainer.json"},"working_directory":{"type":"string","description":"Working directory for this codespace"},"idle_timeout_minutes":{"type":"integer","description":"Time in minutes before codespace stops from inactivity"},"display_name":{"type":"string","description":"Display name for this codespace"},"retention_period_minutes":{"type":"integer","description":"Duration in minutes after codespace has gone idle in which it will be deleted. Must be integer minutes between 0 and 43200 (30 days)."}}},{"required":["pull_request"],"type":"object","properties":{"pull_request":{"required":["pull_request_number","repository_id"],"type":"object","properties":{"pull_request_number":{"type":"integer","description":"Pull request number"},"repository_id":{"type":"integer","description":"Repository id for this codespace"}},"description":"Pull request number for this codespace"},"location":{"type":"string","description":"Location for this codespace. Assigned by IP if not provided"},"machine":{"type":"string","description":"Machine type to use for this codespace"},"devcontainer_path":{"type":"string","description":"Path to devcontainer.json config to use for this codespace"},"working_directory":{"type":"string","description":"Working directory for this codespace"},"idle_timeout_minutes":{"type":"integer","description":"Time in minutes before codespace stops from inactivity"}}}]}';
    public const SCHEMA_TITLE = 'c_c571f3615f4897bcdabd86e499cbf2b7';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * Repository id for this codespace
     */
    private int $repository_id;
    /**
     * Git ref (typically a branch name) for this codespace
     */
    private ?string $ref = null;
    /**
     * Location for this codespace. Assigned by IP if not provided
     */
    private ?string $location = null;
    /**
     * IP for location auto-detection when proxying a request
     */
    private ?string $client_ip = null;
    /**
     * Machine type to use for this codespace
     */
    private ?string $machine = null;
    /**
     * Path to devcontainer.json config to use for this codespace
     */
    private ?string $devcontainer_path = null;
    /**
     * Whether to authorize requested permissions from devcontainer.json
     */
    private ?bool $multi_repo_permissions_opt_out = null;
    /**
     * Working directory for this codespace
     */
    private ?string $working_directory = null;
    /**
     * Time in minutes before codespace stops from inactivity
     */
    private ?int $idle_timeout_minutes = null;
    /**
     * Display name for this codespace
     */
    private ?string $display_name = null;
    /**
     * Duration in minutes after codespace has gone idle in which it will be deleted. Must be integer minutes between 0 and 43200 (30 days).
     */
    private ?int $retention_period_minutes = null;
    /**
     * Repository id for this codespace
     */
    public function repository_id() : int
    {
        return $this->repository_id;
    }
    /**
     * Git ref (typically a branch name) for this codespace
     */
    public function ref() : ?string
    {
        return $this->ref;
    }
    /**
     * Location for this codespace. Assigned by IP if not provided
     */
    public function location() : ?string
    {
        return $this->location;
    }
    /**
     * IP for location auto-detection when proxying a request
     */
    public function client_ip() : ?string
    {
        return $this->client_ip;
    }
    /**
     * Machine type to use for this codespace
     */
    public function machine() : ?string
    {
        return $this->machine;
    }
    /**
     * Path to devcontainer.json config to use for this codespace
     */
    public function devcontainer_path() : ?string
    {
        return $this->devcontainer_path;
    }
    /**
     * Whether to authorize requested permissions from devcontainer.json
     */
    public function multi_repo_permissions_opt_out() : ?bool
    {
        return $this->multi_repo_permissions_opt_out;
    }
    /**
     * Working directory for this codespace
     */
    public function working_directory() : ?string
    {
        return $this->working_directory;
    }
    /**
     * Time in minutes before codespace stops from inactivity
     */
    public function idle_timeout_minutes() : ?int
    {
        return $this->idle_timeout_minutes;
    }
    /**
     * Display name for this codespace
     */
    public function display_name() : ?string
    {
        return $this->display_name;
    }
    /**
     * Duration in minutes after codespace has gone idle in which it will be deleted. Must be integer minutes between 0 and 43200 (30 days).
     */
    public function retention_period_minutes() : ?int
    {
        return $this->retention_period_minutes;
    }
}
