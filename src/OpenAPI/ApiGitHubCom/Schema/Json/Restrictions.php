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
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Restrictions\Users::class)
     */
    private array $users = array();
    /**
     * The list of team `slug`s with push access
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Restrictions\Teams>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Restrictions\Teams::class)
     */
    private array $teams = array();
    /**
     * The list of app `slug`s with push access
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Restrictions\Apps>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Restrictions\Apps::class)
     */
    private array $apps = array();
    /**
     * The list of user `login`s with push access
     * @return array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Restrictions\Users>
     */
    public function users() : array
    {
        return $this->users;
    }
    /**
     * The list of team `slug`s with push access
     * @return array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Restrictions\Teams>
     */
    public function teams() : array
    {
        return $this->teams;
    }
    /**
     * The list of app `slug`s with push access
     * @return array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Restrictions\Apps>
     */
    public function apps() : array
    {
        return $this->apps;
    }
}
