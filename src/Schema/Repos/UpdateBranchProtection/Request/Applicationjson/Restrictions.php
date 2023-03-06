<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\Repos\UpdateBranchProtection\Request\Applicationjson;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class Restrictions
{
    public const SCHEMA_JSON = '{"required":["users","teams"],"type":["object","null"],"properties":{"users":{"type":"array","items":{"type":"string"},"description":"The list of user `login`s with push access"},"teams":{"type":"array","items":{"type":"string"},"description":"The list of team `slug`s with push access"},"apps":{"type":"array","items":{"type":"string"},"description":"The list of app `slug`s with push access"}},"description":"Restrict who can push to the protected branch. User, app, and team `restrictions` are only available for organization-owned repositories. Set to `null` to disable."}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = 'Restrict who can push to the protected branch. User, app, and team `restrictions` are only available for organization-owned repositories. Set to `null` to disable.';
    public const SCHEMA_EXAMPLE_DATA = '{"users":["generated_users"],"teams":["generated_teams"],"apps":["generated_apps"]}';
    /**
     * users: The list of user `login`s with push access
     * @param ?array<string> $users
     * teams: The list of team `slug`s with push access
     * @param ?array<string> $teams
     * apps: The list of app `slug`s with push access
     * @param array<string> $apps
     */
    public function __construct(public ?array $users, public ?array $teams, public array $apps)
    {
    }
}
