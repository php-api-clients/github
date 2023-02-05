<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Json;

final class BypassPullRequestAllowances
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"users":{"type":"array","items":{"type":"string"},"description":"The list of user `login`s allowed to bypass pull request requirements."},"teams":{"type":"array","items":{"type":"string"},"description":"The list of team `slug`s allowed to bypass pull request requirements."},"apps":{"type":"array","items":{"type":"string"},"description":"The list of app `slug`s allowed to bypass pull request requirements."}},"description":"Allow specific users, teams, or apps to bypass pull request requirements."}';
    public const SCHEMA_TITLE = 'Json\\BypassPullRequestAllowances';
    public const SCHEMA_DESCRIPTION = 'Allow specific users, teams, or apps to bypass pull request requirements.';
    /**
     * The list of user `login`s allowed to bypass pull request requirements.
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BypassPullRequestAllowances\Users>
     */
    public readonly array $users;
    /**
     * The list of team `slug`s allowed to bypass pull request requirements.
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BypassPullRequestAllowances\Teams>
     */
    public readonly array $teams;
    /**
     * The list of app `slug`s allowed to bypass pull request requirements.
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BypassPullRequestAllowances\Apps>
     */
    public readonly array $apps;
    /**
     * @param array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BypassPullRequestAllowances\Users> $users
     * @param array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BypassPullRequestAllowances\Teams> $teams
     * @param array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BypassPullRequestAllowances\Apps> $apps
     */
    public function __construct(array $users, array $teams, array $apps)
    {
        $this->users = $users;
        $this->teams = $teams;
        $this->apps = $apps;
    }
}
