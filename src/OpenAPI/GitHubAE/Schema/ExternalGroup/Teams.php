<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\ExternalGroup;

final class Teams
{
    public const SCHEMA_JSON = '{"required":["team_id","team_name"],"type":"object","properties":{"team_id":{"type":"integer","description":"The id for a team","examples":[1]},"team_name":{"type":"string","description":"The name of the team","examples":["team-test"]}}}';
    public const SCHEMA_TITLE = 'ExternalGroup\\Teams';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The id for a team
     */
    private int $team_id;
    /**
     * The name of the team
     */
    private string $team_name;
    /**
     * The id for a team
     */
    public function team_id() : int
    {
        return $this->team_id;
    }
    /**
     * The name of the team
     */
    public function team_name() : string
    {
        return $this->team_name;
    }
}
