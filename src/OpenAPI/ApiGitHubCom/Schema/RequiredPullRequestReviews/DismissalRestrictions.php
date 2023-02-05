<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\RequiredPullRequestReviews;

final class DismissalRestrictions
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"users":{"type":"array","items":{"type":"string"},"description":"The list of user `login`s with dismissal access"},"teams":{"type":"array","items":{"type":"string"},"description":"The list of team `slug`s with dismissal access"},"apps":{"type":"array","items":{"type":"string"},"description":"The list of app `slug`s with dismissal access"}},"description":"Specify which users, teams, and apps can dismiss pull request reviews. Pass an empty `dismissal_restrictions` object to disable. User and team `dismissal_restrictions` are only available for organization-owned repositories. Omit this parameter for personal repositories."}';
    public const SCHEMA_TITLE = 'RequiredPullRequestReviews\\DismissalRestrictions';
    public const SCHEMA_DESCRIPTION = 'Specify which users, teams, and apps can dismiss pull request reviews. Pass an empty `dismissal_restrictions` object to disable. User and team `dismissal_restrictions` are only available for organization-owned repositories. Omit this parameter for personal repositories.';
    /**
     * The list of user `login`s with dismissal access
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\DismissalRestrictions\Users>
     */
    public readonly array $users;
    /**
     * The list of team `slug`s with dismissal access
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\DismissalRestrictions\Teams>
     */
    public readonly array $teams;
    /**
     * The list of app `slug`s with dismissal access
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\DismissalRestrictions\Apps>
     */
    public readonly array $apps;
    /**
     * @param array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\DismissalRestrictions\Users> $users
     * @param array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\DismissalRestrictions\Teams> $teams
     * @param array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\DismissalRestrictions\Apps> $apps
     */
    public function __construct(array $users, array $teams, array $apps)
    {
        $this->users = $users;
        $this->teams = $teams;
        $this->apps = $apps;
    }
}
