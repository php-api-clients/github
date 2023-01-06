<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\SetTeamAccessRestrictions;

final class Request
{
    public const SCHEMA_JSON = '{"oneOf":[{"required":["teams"],"type":"object","properties":{"teams":{"type":"array","items":{"type":"string"},"description":"The slug values for teams"}},"example":{"teams":["justice-league"]}},{"type":"array","items":{"type":"string"},"description":"The slug values for teams"}]}';
    public const SCHEMA_TITLE = 'SetTeamAccessRestrictions\\Request';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The slug values for teams
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Request\Teams>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Request\Teams::class)
     */
    private array $teams = array();
    /**
     * The slug values for teams
     * @return array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Request\Teams>
     */
    public function teams() : array
    {
        return $this->teams;
    }
}
