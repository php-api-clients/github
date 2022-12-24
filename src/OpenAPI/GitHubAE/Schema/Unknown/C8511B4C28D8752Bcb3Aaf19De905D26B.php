<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown;

final class C8511B4C28D8752Bcb3Aaf19De905D26B
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"permission":{"type":"string","description":"The permission to grant the collaborator. **Only valid on organization-owned repositories.**","default":"push"}}}';
    public const SCHEMA_TITLE = 'c_8511b4c28d8752bcb3aaf19de905d26b';
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
