<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Schema;

final class TeamMembership
{
    public const SCHEMA_TITLE = 'Team Membership';
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
    /**
     * The role of the user in the team.
     */
    public function role() : string
    {
        return $this->role;
    }
    /**
     * The state of the user's membership in the team.
     */
    public function state() : string
    {
        return $this->state;
    }
}
