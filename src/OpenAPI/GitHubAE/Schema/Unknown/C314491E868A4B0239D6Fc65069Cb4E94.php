<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown;

final class C314491E868A4B0239D6Fc65069Cb4E94
{
    public const SCHEMA_JSON = '{"required":["new_owner"],"type":"object","properties":{"new_owner":{"type":"string","description":"The username or organization name the repository will be transferred to."},"team_ids":{"type":"array","items":{"type":"integer"},"description":"ID of the team or teams to add to the repository. Teams can only be added to organization-owned repositories."}}}';
    public const SCHEMA_TITLE = 'c_314491e868a4b0239d6fc65069cb4e94';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The username or organization name the repository will be transferred to.
     */
    private string $new_owner;
    /**
     * ID of the team or teams to add to the repository. Teams can only be added to organization-owned repositories.
     * @var array<\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C987434F426A7002Fc01406E2Ac533C03>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C987434F426A7002Fc01406E2Ac533C03::class)
     */
    private array $team_ids = array();
    /**
     * The username or organization name the repository will be transferred to.
     */
    public function new_owner() : string
    {
        return $this->new_owner;
    }
    /**
     * ID of the team or teams to add to the repository. Teams can only be added to organization-owned repositories.
     * @return array<\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C987434F426A7002Fc01406E2Ac533C03>
     */
    public function team_ids() : array
    {
        return $this->team_ids;
    }
}
