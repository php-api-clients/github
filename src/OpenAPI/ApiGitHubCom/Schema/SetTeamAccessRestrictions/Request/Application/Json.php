<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\SetTeamAccessRestrictions\Request\Application;

final class Json
{
    public const SCHEMA_JSON = '{"oneOf":[{"required":["teams"],"type":"object","properties":{"teams":{"type":"array","items":{"type":"string"},"description":"The slug values for teams"}},"example":{"teams":["justice-league"]}},{"type":"array","items":{"type":"string"},"description":"The slug values for teams"}]}';
    public const SCHEMA_TITLE = 'SetTeamAccessRestrictions\\Request\\Application\\Json';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The slug values for teams
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Json\Teams>
     */
    public readonly array $teams;
    /**
     * @param array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Json\Teams> $teams
     */
    public function __construct(array $teams)
    {
        $this->teams = $teams;
    }
}
