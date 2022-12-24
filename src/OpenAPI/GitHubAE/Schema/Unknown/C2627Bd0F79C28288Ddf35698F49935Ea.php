<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown;

final class C2627Bd0F79C28288Ddf35698F49935Ea
{
    public const SCHEMA_JSON = '{"oneOf":[{"required":["teams"],"type":"object","properties":{"teams":{"type":"array","items":{"type":"string"},"description":"The slug values for teams"}},"example":{"teams":["my-team"]}},{"type":"array","items":{"type":"string"},"description":"The slug values for teams"}]}';
    public const SCHEMA_TITLE = 'c_2627bd0f79c28288ddf35698f49935ea';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The slug values for teams
     * @var array<\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C2809284B6E54D0D34017715Ffe5636Bd>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C2809284B6E54D0D34017715Ffe5636Bd::class)
     */
    private array $teams = array();
    /**
     * The slug values for teams
     * @return array<\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C2809284B6E54D0D34017715Ffe5636Bd>
     */
    public function teams() : array
    {
        return $this->teams;
    }
}
