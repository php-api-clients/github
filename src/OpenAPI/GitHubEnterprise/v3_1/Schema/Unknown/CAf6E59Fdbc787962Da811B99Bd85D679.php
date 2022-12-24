<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown;

final class CAf6E59Fdbc787962Da811B99Bd85D679
{
    public const SCHEMA_JSON = '{"type":["object","null"],"properties":{"permission":{"enum":["read","write","admin"],"type":"string","description":"The permission to grant the collaborator.","default":"write","examples":["write"]}}}';
    public const SCHEMA_TITLE = 'c_af6e59fdbc787962da811b99bd85d679';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The permission to grant the collaborator.
     */
    private string $permission;
    /**
     * The permission to grant the collaborator.
     */
    public function permission() : string
    {
        return $this->permission;
    }
}
