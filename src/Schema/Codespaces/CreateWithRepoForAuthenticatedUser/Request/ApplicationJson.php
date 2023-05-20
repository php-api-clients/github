<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\Codespaces\CreateWithRepoForAuthenticatedUser\Request;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class ApplicationJson
{
    public const SCHEMA_JSON         = '{"type":["object","null"],"properties":{"ref":{"type":"string","description":"Git ref (typically a branch name) for this codespace"},"location":{"type":"string","description":"The requested location for a new codespace. Best efforts are made to respect this upon creation. Assigned by IP if not provided."},"geo":{"enum":["EuropeWest","SoutheastAsia","UsEast","UsWest"],"type":"string","description":"The geographic area for this codespace. If not specified, the value is assigned by IP. This property replaces `location`, which is being deprecated."},"client_ip":{"type":"string","description":"IP for location auto-detection when proxying a request"},"machine":{"type":"string","description":"Machine type to use for this codespace"},"devcontainer_path":{"type":"string","description":"Path to devcontainer.json config to use for this codespace"},"multi_repo_permissions_opt_out":{"type":"boolean","description":"Whether to authorize requested permissions from devcontainer.json"},"working_directory":{"type":"string","description":"Working directory for this codespace"},"idle_timeout_minutes":{"type":"integer","description":"Time in minutes before codespace stops from inactivity"},"display_name":{"type":"string","description":"Display name for this codespace"},"retention_period_minutes":{"type":"integer","description":"Duration in minutes after codespace has gone idle in which it will be deleted. Must be integer minutes between 0 and 43200 (30 days)."}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"ref":"generated","location":"generated","geo":"EuropeWest","client_ip":"generated","machine":"generated","devcontainer_path":"generated","multi_repo_permissions_opt_out":false,"working_directory":"generated","idle_timeout_minutes":20,"display_name":"generated","retention_period_minutes":24}';

    /**
     * ref: Git ref (typically a branch name) for this codespace
     * location: The requested location for a new codespace. Best efforts are made to respect this upon creation. Assigned by IP if not provided.
     * geo: The geographic area for this codespace. If not specified, the value is assigned by IP. This property replaces `location`, which is being deprecated.
     * clientIp: IP for location auto-detection when proxying a request
     * machine: Machine type to use for this codespace
     * devcontainerPath: Path to devcontainer.json config to use for this codespace
     * multiRepoPermissionsOptOut: Whether to authorize requested permissions from devcontainer.json
     * workingDirectory: Working directory for this codespace
     * idleTimeoutMinutes: Time in minutes before codespace stops from inactivity
     * displayName: Display name for this codespace
     * retentionPeriodMinutes: Duration in minutes after codespace has gone idle in which it will be deleted. Must be integer minutes between 0 and 43200 (30 days).
     */
    public function __construct(public ?string $ref, public ?string $location, public ?string $geo, #[MapFrom('client_ip')] public ?string $clientIp, public ?string $machine, #[MapFrom('devcontainer_path')] public ?string $devcontainerPath, #[MapFrom('multi_repo_permissions_opt_out')] public ?bool $multiRepoPermissionsOptOut, #[MapFrom('working_directory')] public ?string $workingDirectory, #[MapFrom('idle_timeout_minutes')] public ?int $idleTimeoutMinutes, #[MapFrom('display_name')] public ?string $displayName, #[MapFrom('retention_period_minutes')] public ?int $retentionPeriodMinutes)
    {
    }
}
