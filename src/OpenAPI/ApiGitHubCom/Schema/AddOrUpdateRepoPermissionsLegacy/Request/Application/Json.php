<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\AddOrUpdateRepoPermissionsLegacy\Request\Application;

final class Json
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"permission":{"enum":["pull","push","admin"],"type":"string","description":"The permission to grant the team on this repository. If no permission is specified, the team\'s `permission` attribute will be used to determine what permission to grant the team on this repository."}}}';
    public const SCHEMA_TITLE = 'AddOrUpdateRepoPermissionsLegacy\\Request\\Application\\Json';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The permission to grant the team on this repository. If no permission is specified, the team's `permission` attribute will be used to determine what permission to grant the team on this repository.
     */
    public readonly string $permission;
    public function __construct(string $permission)
    {
        $this->permission = $permission;
    }
}
