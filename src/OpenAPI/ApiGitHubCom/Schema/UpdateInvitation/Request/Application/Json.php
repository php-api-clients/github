<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\UpdateInvitation\Request\Application;

final class Json
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"permissions":{"enum":["read","write","maintain","triage","admin"],"type":"string","description":"The permissions that the associated user will have on the repository. Valid values are `read`, `write`, `maintain`, `triage`, and `admin`."}}}';
    public const SCHEMA_TITLE = 'UpdateInvitation\\Request\\Application\\Json';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The permissions that the associated user will have on the repository. Valid values are `read`, `write`, `maintain`, `triage`, and `admin`.
     */
    public readonly string $permissions;
    public function __construct(string $permissions)
    {
        $this->permissions = $permissions;
    }
}
