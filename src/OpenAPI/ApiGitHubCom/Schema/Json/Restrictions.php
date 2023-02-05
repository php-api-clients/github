<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Json;

final class Restrictions
{
    public const SCHEMA_JSON = '{"required":["users","teams"],"type":["object","null"],"properties":{"users":{"type":"array","items":{"type":"string"},"description":"The list of user `login`s with push access"},"teams":{"type":"array","items":{"type":"string"},"description":"The list of team `slug`s with push access"},"apps":{"type":"array","items":{"type":"string"},"description":"The list of app `slug`s with push access"}},"description":"Restrict who can push to the protected branch. User, app, and team `restrictions` are only available for organization-owned repositories. Set to `null` to disable."}';
    public const SCHEMA_TITLE = 'Json\\Restrictions';
    public const SCHEMA_DESCRIPTION = 'Restrict who can push to the protected branch. User, app, and team `restrictions` are only available for organization-owned repositories. Set to `null` to disable.';
    /**
     * The list of user `login`s with push access
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Restrictions\Users>
     */
    public readonly array $users;
    /**
     * The list of team `slug`s with push access
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Restrictions\Teams>
     */
    public readonly array $teams;
    /**
     * The list of app `slug`s with push access
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Restrictions\Apps>
     */
    public readonly array $apps;
    /**
     * @param array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Restrictions\Users> $users
     * @param array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Restrictions\Teams> $teams
     * @param array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Restrictions\Apps> $apps
     */
    public function __construct(array $users, array $teams, array $apps)
    {
        $this->users = $users;
        $this->teams = $teams;
        $this->apps = $apps;
    }
}
