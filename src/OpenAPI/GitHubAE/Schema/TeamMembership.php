<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema;

final class TeamMembership
{
    public const SCHEMA_TITLE = 'Team Membership';
    public const SPL_HASH = '000000001ef8e46f000000007fdcfded';
    public const SCHEMA_DESCRIPTION = 'Team Membership';
    private ?string $url = null;
    /**
     * The role of the user in the team.
     */
    private ?string $role = null;
    /**
     * The state of the user's membership in the team.
     */
    private ?string $state = null;
    public function url() : ?string
    {
        return $this->url;
    }
    public function role() : ?string
    {
        return $this->role;
    }
    public function state() : ?string
    {
        return $this->state;
    }
}
