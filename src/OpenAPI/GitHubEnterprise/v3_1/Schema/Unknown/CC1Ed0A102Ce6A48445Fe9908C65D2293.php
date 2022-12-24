<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown;

final class CC1Ed0A102Ce6A48445Fe9908C65D2293
{
    public const SCHEMA_JSON = '{"required":["runners"],"type":"object","properties":{"runners":{"type":"array","items":{"type":"integer","description":"Unique identifier of the runner."},"description":"List of runner IDs to add to the runner group."}}}';
    public const SCHEMA_TITLE = 'c_c1ed0a102ce6a48445fe9908c65d2293';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * List of runner IDs to add to the runner group.
     * @var array<\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\CD9Babd07186876224Bd7E5177Cc2A806>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\CD9Babd07186876224Bd7E5177Cc2A806::class)
     */
    private array $runners = array();
    /**
     * List of runner IDs to add to the runner group.
     * @return array<\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\CD9Babd07186876224Bd7E5177Cc2A806>
     */
    public function runners() : array
    {
        return $this->runners;
    }
}
