<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\Teams\AddOrUpdateMembershipForUserInOrg\Request;

final readonly class ApplicationJson
{
    public const SCHEMA_JSON         = '{"type":"object","properties":{"role":{"enum":["member","maintainer"],"type":"string","description":"The role that this user should have in the team.","default":"member"}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"role":"maintainer"}';

    /**
     * role: The role that this user should have in the team.
     */
    public function __construct(public ?string $role)
    {
    }
}
