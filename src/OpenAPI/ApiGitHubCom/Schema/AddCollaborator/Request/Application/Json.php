<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\AddCollaborator\Request\Application;

final class Json
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"permission":{"type":"string","description":"The permission to grant the collaborator. **Only valid on organization-owned repositories.** We accept the following permissions to be set: `pull`, `triage`, `push`, `maintain`, `admin` and you can also specify a custom repository role name, if the owning organization has defined any.","default":"push"}}}';
    public const SCHEMA_EXAMPLE = '[]';
    public const SCHEMA_TITLE = 'AddCollaborator\\Request\\Application\\Json';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The permission to grant the collaborator. **Only valid on organization-owned repositories.** We accept the following permissions to be set: `pull`, `triage`, `push`, `maintain`, `admin` and you can also specify a custom repository role name, if the owning organization has defined any.
     */
    public readonly string $permission;
    public function __construct(string $permission)
    {
        $this->permission = $permission;
    }
}
