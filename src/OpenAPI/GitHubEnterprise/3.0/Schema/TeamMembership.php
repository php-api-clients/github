<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\3.0\Schema;

final class TeamMembership
{
    public const SCHEMA_TITLE = 'Team Membership';
    public const SCHEMA_DESCRIPTION = 'Team Membership';
    private string $url;
    /**The role of the user in the team.**/
    private string $role;
    /**The state of the user's membership in the team.**/
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
