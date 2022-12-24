<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown;

final class CDdef0D007Da9A93C251Bdd64742Bc67F
{
    public const SCHEMA_JSON = '{"required":["selected_organization_ids"],"type":"object","properties":{"selected_organization_ids":{"type":"array","items":{"type":"integer","description":"Unique identifier of the organization."},"description":"List of organization IDs that can access the runner group."}}}';
    public const SCHEMA_TITLE = 'c_ddef0d007da9a93c251bdd64742bc67f';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * List of organization IDs that can access the runner group.
     * @var array<\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C95Bd6D3529904930285164C639Dd255E>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C95Bd6D3529904930285164C639Dd255E::class)
     */
    private array $selected_organization_ids = array();
    /**
     * List of organization IDs that can access the runner group.
     * @return array<\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C95Bd6D3529904930285164C639Dd255E>
     */
    public function selected_organization_ids() : array
    {
        return $this->selected_organization_ids;
    }
}
