<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema;

final class TeamMembership
{
    public const SCHEMA_JSON = '{"title":"Team Membership","required":["role","state","url"],"type":"object","properties":{"url":{"type":"string","format":"uri"},"role":{"enum":["member","maintainer"],"type":"string","description":"The role of the user in the team.","default":"member","examples":["member"]},"state":{"enum":["active","pending"],"type":"string","description":"The state of the user\'s membership in the team."}},"description":"Team Membership"}';
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
