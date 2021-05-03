<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Schema;

final class TeamMembership
{
    public const SCHEMA_TITLE = 'Team Membership';
    public const SPL_HASH = '00000000631282640000000044ad25fc';
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
