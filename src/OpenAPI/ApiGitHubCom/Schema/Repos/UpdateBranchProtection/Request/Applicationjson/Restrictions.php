<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Repos\UpdateBranchProtection\Request\Applicationjson;

final readonly class Restrictions
{
    public const SCHEMA_JSON = '{"required":["users","teams"],"type":["object","null"],"properties":{"users":{"type":"array","items":{"type":"string"},"description":"The list of user `login`s with push access"},"teams":{"type":"array","items":{"type":"string"},"description":"The list of team `slug`s with push access"},"apps":{"type":"array","items":{"type":"string"},"description":"The list of app `slug`s with push access"}},"description":"Restrict who can push to the protected branch. User, app, and team `restrictions` are only available for organization-owned repositories. Set to `null` to disable."}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = 'Restrict who can push to the protected branch. User, app, and team `restrictions` are only available for organization-owned repositories. Set to `null` to disable.';
    /**
     * The list of user `login`s with push access
     */
    public ?array $users;
    /**
     * The list of team `slug`s with push access
     */
    public ?array $teams;
    /**
     * The list of app `slug`s with push access
     */
    public array $apps;
    public function __construct(array $users, array $teams, array $apps)
    {
        $this->users = $users;
        $this->teams = $teams;
        $this->apps = $apps;
    }
}
