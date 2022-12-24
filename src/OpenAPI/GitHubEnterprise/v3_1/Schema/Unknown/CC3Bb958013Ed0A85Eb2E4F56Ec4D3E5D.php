<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown;

final class CC3Bb958013Ed0A85Eb2E4F56Ec4D3E5D
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"name":{"type":"string","description":"Name of the runner group."},"visibility":{"enum":["selected","all"],"type":"string","description":"Visibility of a runner group. You can select all organizations or select individual organizations.","default":"all"},"allows_public_repositories":{"type":"boolean","description":"Whether the runner group can be used by `public` repositories.","default":false}}}';
    public const SCHEMA_TITLE = 'c_c3bb958013ed0a85eb2e4f56ec4d3e5d';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * Name of the runner group.
     */
    private string $name;
    /**
     * Visibility of a runner group. You can select all organizations or select individual organizations.
     */
    private string $visibility;
    /**
     * Whether the runner group can be used by `public` repositories.
     */
    private bool $allows_public_repositories;
    /**
     * Name of the runner group.
     */
    public function name() : string
    {
        return $this->name;
    }
    /**
     * Visibility of a runner group. You can select all organizations or select individual organizations.
     */
    public function visibility() : string
    {
        return $this->visibility;
    }
    /**
     * Whether the runner group can be used by `public` repositories.
     */
    public function allows_public_repositories() : bool
    {
        return $this->allows_public_repositories;
    }
}
