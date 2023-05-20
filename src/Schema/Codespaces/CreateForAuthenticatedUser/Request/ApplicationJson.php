<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\Codespaces\CreateForAuthenticatedUser\Request;

final readonly class ApplicationJson
{
    public const SCHEMA_JSON         = '{"oneOf":[{"required":["repository_id"],"type":"object","properties":{"repository_id":{"type":"integer","description":"Repository id for this codespace"},"ref":{"type":"string","description":"Git ref (typically a branch name) for this codespace"},"location":{"type":"string","description":"The requested location for a new codespace. Best efforts are made to respect this upon creation. Assigned by IP if not provided."},"geo":{"enum":["EuropeWest","SoutheastAsia","UsEast","UsWest"],"type":"string","description":"The geographic area for this codespace. If not specified, the value is assigned by IP. This property replaces `location`, which is being deprecated."},"client_ip":{"type":"string","description":"IP for location auto-detection when proxying a request"},"machine":{"type":"string","description":"Machine type to use for this codespace"},"devcontainer_path":{"type":"string","description":"Path to devcontainer.json config to use for this codespace"},"multi_repo_permissions_opt_out":{"type":"boolean","description":"Whether to authorize requested permissions from devcontainer.json"},"working_directory":{"type":"string","description":"Working directory for this codespace"},"idle_timeout_minutes":{"type":"integer","description":"Time in minutes before codespace stops from inactivity"},"display_name":{"type":"string","description":"Display name for this codespace"},"retention_period_minutes":{"type":"integer","description":"Duration in minutes after codespace has gone idle in which it will be deleted. Must be integer minutes between 0 and 43200 (30 days)."}}},{"required":["pull_request"],"type":"object","properties":{"pull_request":{"required":["pull_request_number","repository_id"],"type":"object","properties":{"pull_request_number":{"type":"integer","description":"Pull request number"},"repository_id":{"type":"integer","description":"Repository id for this codespace"}},"description":"Pull request number for this codespace"},"location":{"type":"string","description":"The requested location for a new codespace. Best efforts are made to respect this upon creation. Assigned by IP if not provided."},"geo":{"enum":["EuropeWest","SoutheastAsia","UsEast","UsWest"],"type":"string","description":"The geographic area for this codespace. If not specified, the value is assigned by IP. This property replaces `location`, which is being deprecated."},"machine":{"type":"string","description":"Machine type to use for this codespace"},"devcontainer_path":{"type":"string","description":"Path to devcontainer.json config to use for this codespace"},"working_directory":{"type":"string","description":"Working directory for this codespace"},"idle_timeout_minutes":{"type":"integer","description":"Time in minutes before codespace stops from inactivity"}}}]}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '[]';

    public function __construct()
    {
    }
}
