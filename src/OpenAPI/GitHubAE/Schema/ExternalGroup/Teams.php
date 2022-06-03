<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\ExternalGroup;

final class Teams
{
    public const SCHEMA_TITLE = 'external-group::teams';
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
