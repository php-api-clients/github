<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final readonly class TeamMembership
{
    public const SCHEMA_JSON = '{"title":"Team Membership","required":["role","state","url"],"type":"object","properties":{"url":{"type":"string","format":"uri"},"role":{"enum":["member","maintainer"],"type":"string","description":"The role of the user in the team.","default":"member","examples":["member"]},"state":{"enum":["active","pending"],"type":"string","description":"The state of the user\'s membership in the team."}},"description":"Team Membership"}';
    public const SCHEMA_TITLE = 'Team Membership';
    public const SCHEMA_DESCRIPTION = 'Team Membership';
    public ?string $url;
    /**
     * The role of the user in the team.
     */
    public ?string $role;
    /**
     * The state of the user's membership in the team.
     */
    public ?string $state;
    public function __construct(string $url, string $role, string $state)
    {
        $this->url = $url;
        $this->role = $role;
        $this->state = $state;
    }
}
