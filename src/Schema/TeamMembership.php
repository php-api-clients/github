<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class TeamMembership
{
    public const SCHEMA_JSON = '{"title":"Team Membership","required":["role","state","url"],"type":"object","properties":{"url":{"type":"string","format":"uri"},"role":{"enum":["member","maintainer"],"type":"string","description":"The role of the user in the team.","default":"member","examples":["member"]},"state":{"enum":["active","pending"],"type":"string","description":"The state of the user\'s membership in the team."}},"description":"Team Membership"}';
    public const SCHEMA_TITLE = 'Team Membership';
    public const SCHEMA_DESCRIPTION = 'Team Membership';
    public const SCHEMA_EXAMPLE_DATA = '{"url":"generated_url","role":"member","state":"generated_state"}';
    /**
     * role: The role of the user in the team.
     * state: The state of the user's membership in the team.
     */
    public function __construct(public ?string $url, public ?string $role, public ?string $state)
    {
    }
}
