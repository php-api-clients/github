<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\AddOrUpdateRepoPermissionsInOrg\Request\Application;

final class Json
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"permission":{"type":"string","description":"The permission to grant the team on this repository. We accept the following permissions to be set: `pull`, `triage`, `push`, `maintain`, `admin` and you can also specify a custom repository role name, if the owning organization has defined any. If no permission is specified, the team\'s `permission` attribute will be used to determine what permission to grant the team on this repository.","default":"push"}}}';
    public const SCHEMA_TITLE = 'AddOrUpdateRepoPermissionsInOrg\\Request\\Application\\Json';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The permission to grant the team on this repository. We accept the following permissions to be set: `pull`, `triage`, `push`, `maintain`, `admin` and you can also specify a custom repository role name, if the owning organization has defined any. If no permission is specified, the team's `permission` attribute will be used to determine what permission to grant the team on this repository.
     */
    public readonly string $permission;
    public function __construct(string $permission)
    {
        $this->permission = $permission;
    }
}
