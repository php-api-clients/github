<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown;

final class CC8Df3A876C1B9479Cff4Dd932212B5D7
{
    public const SCHEMA_JSON = '{"required":["selected_organization_ids"],"type":"object","properties":{"selected_organization_ids":{"type":"array","items":{"type":"integer","description":"Unique identifier of the organization."},"description":"List of organization IDs to enable for GitHub Actions."}}}';
    public const SCHEMA_TITLE = 'c_c8df3a876c1b9479cff4dd932212b5d7';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * List of organization IDs to enable for GitHub Actions.
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C95Bd6D3529904930285164C639Dd255E>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C95Bd6D3529904930285164C639Dd255E::class)
     */
    private array $selected_organization_ids = array();
    /**
     * List of organization IDs to enable for GitHub Actions.
     * @return array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C95Bd6D3529904930285164C639Dd255E>
     */
    public function selected_organization_ids() : array
    {
        return $this->selected_organization_ids;
    }
}
