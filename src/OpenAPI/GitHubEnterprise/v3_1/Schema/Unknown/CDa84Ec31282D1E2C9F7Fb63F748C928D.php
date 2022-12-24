<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown;

final class CDa84Ec31282D1E2C9F7Fb63F748C928D
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"permission":{"enum":["pull","push","admin","maintain","triage"],"type":"string","description":"The permission to grant the collaborator. **Only valid on organization-owned repositories.**","default":"push"}}}';
    public const SCHEMA_TITLE = 'c_da84ec31282d1e2c9f7fb63f748c928d';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The permission to grant the collaborator. **Only valid on organization-owned repositories.**
     */
    private string $permission;
    /**
     * The permission to grant the collaborator. **Only valid on organization-owned repositories.**
     */
    public function permission() : string
    {
        return $this->permission;
    }
}
