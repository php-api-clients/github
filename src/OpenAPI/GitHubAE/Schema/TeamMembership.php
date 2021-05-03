<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema;

final class TeamMembership
{
    public const SCHEMA_TITLE = 'Team Membership';
    public const SPL_HASH = '000000007ee6ef840000000021479ea3';
    public const SCHEMA_DESCRIPTION = 'Team Membership';
    private string $url;
    /**
     * The role of the user in the team.
     */
    private string $role;
    /**
     * The state of the user's membership in the team.
     */
    private string $state;
    public function url() : string
    {
        return $this->url;
    }
    public function role() : string
    {
        return $this->role;
    }
    public function state() : string
    {
        return $this->state;
    }
}
