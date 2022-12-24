<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown;

final class CEa0Ac2B71A431158B928B09F2Edd1C36
{
    public const SCHEMA_JSON = '{"required":["team_id","team_name"],"type":"object","properties":{"team_id":{"type":"integer","description":"The id for a team","examples":[1]},"team_name":{"type":"string","description":"The name of the team","examples":["team-test"]}}}';
    public const SCHEMA_TITLE = 'c_ea0ac2b71a431158b928b09f2edd1c36';
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
