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
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\DismissalRestrictions\Users::class)
     */
    private array $users = array();
    /**
     * The list of team `slug`s with dismissal access
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\DismissalRestrictions\Teams>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\DismissalRestrictions\Teams::class)
     */
    private array $teams = array();
    /**
     * The list of app `slug`s with dismissal access
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\DismissalRestrictions\Apps>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\DismissalRestrictions\Apps::class)
     */
    private array $apps = array();
    /**
     * The list of user `login`s with dismissal access
     * @return array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\DismissalRestrictions\Users>
     */
    public function users() : array
    {
        return $this->users;
    }
    /**
     * The list of team `slug`s with dismissal access
     * @return array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\DismissalRestrictions\Teams>
     */
    public function teams() : array
    {
        return $this->teams;
    }
    /**
     * The list of app `slug`s with dismissal access
     * @return array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\DismissalRestrictions\Apps>
     */
    public function apps() : array
    {
        return $this->apps;
    }
}
