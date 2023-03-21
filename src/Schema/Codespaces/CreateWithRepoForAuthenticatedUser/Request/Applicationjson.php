<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\Codespaces\CreateWithRepoForAuthenticatedUser\Request;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class Applicationjson
{
    public const SCHEMA_JSON = '{"type":["object","null"],"properties":{"ref":{"type":"string","description":"Git ref (typically a branch name) for this codespace"},"location":{"type":"string","description":"Location for this codespace. Assigned by IP if not provided"},"client_ip":{"type":"string","description":"IP for location auto-detection when proxying a request"},"machine":{"type":"string","description":"Machine type to use for this codespace"},"devcontainer_path":{"type":"string","description":"Path to devcontainer.json config to use for this codespace"},"multi_repo_permissions_opt_out":{"type":"boolean","description":"Whether to authorize requested permissions from devcontainer.json"},"working_directory":{"type":"string","description":"Working directory for this codespace"},"idle_timeout_minutes":{"type":"integer","description":"Time in minutes before codespace stops from inactivity"},"display_name":{"type":"string","description":"Display name for this codespace"},"retention_period_minutes":{"type":"integer","description":"Duration in minutes after codespace has gone idle in which it will be deleted. Must be integer minutes between 0 and 43200 (30 days)."}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"ref":"generated_ref_null","location":"generated_location_null","client_ip":"generated_client_ip_null","machine":"generated_machine_null","devcontainer_path":"generated_devcontainer_path_null","multi_repo_permissions_opt_out":false,"working_directory":"generated_working_directory_null","idle_timeout_minutes":13,"display_name":"generated_display_name_null","retention_period_minutes":13}';
    /**
     * ref: Git ref (typically a branch name) for this codespace
     * location: Location for this codespace. Assigned by IP if not provided
     * client_ip: IP for location auto-detection when proxying a request
     * machine: Machine type to use for this codespace
     * devcontainer_path: Path to devcontainer.json config to use for this codespace
     * multi_repo_permissions_opt_out: Whether to authorize requested permissions from devcontainer.json
     * working_directory: Working directory for this codespace
     * idle_timeout_minutes: Time in minutes before codespace stops from inactivity
     * display_name: Display name for this codespace
     * retention_period_minutes: Duration in minutes after codespace has gone idle in which it will be deleted. Must be integer minutes between 0 and 43200 (30 days).
     */
    public function __construct(public ?string $ref, public ?string $location, public ?string $client_ip, public ?string $machine, public ?string $devcontainer_path, public ?bool $multi_repo_permissions_opt_out, public ?string $working_directory, public ?int $idle_timeout_minutes, public ?string $display_name, public ?int $retention_period_minutes)
    {
    }
}
