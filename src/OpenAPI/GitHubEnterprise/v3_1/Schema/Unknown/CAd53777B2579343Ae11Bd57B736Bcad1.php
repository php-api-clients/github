<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown;

final class CAd53777B2579343Ae11Bd57B736Bcad1
{
    public const SCHEMA_JSON = '{"required":["selected_repository_ids"],"type":"object","properties":{"selected_repository_ids":{"type":"array","items":{"type":"integer","description":"Unique identifier of the repository."},"description":"List of repository IDs to enable for GitHub Actions."}}}';
    public const SCHEMA_TITLE = 'c_ad53777b2579343ae11bd57b736bcad1';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * List of repository IDs to enable for GitHub Actions.
     * @var array<\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C4765428C44Cf511223D18E3Fdc80A0D6>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C4765428C44Cf511223D18E3Fdc80A0D6::class)
     */
    private array $selected_repository_ids = array();
    /**
     * List of repository IDs to enable for GitHub Actions.
     * @return array<\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C4765428C44Cf511223D18E3Fdc80A0D6>
     */
    public function selected_repository_ids() : array
    {
        return $this->selected_repository_ids;
    }
}
