<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\RequiredPullRequestReviews;

final class BypassPullRequestAllowances
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"users":{"type":"array","items":{"type":"string"},"description":"The list of user `login`s allowed to bypass pull request requirements."},"teams":{"type":"array","items":{"type":"string"},"description":"The list of team `slug`s allowed to bypass pull request requirements."},"apps":{"type":"array","items":{"type":"string"},"description":"The list of app `slug`s allowed to bypass pull request requirements."}},"description":"Allow specific users, teams, or apps to bypass pull request requirements."}';
    public const SCHEMA_TITLE = 'RequiredPullRequestReviews\\BypassPullRequestAllowances';
    public const SCHEMA_DESCRIPTION = 'Allow specific users, teams, or apps to bypass pull request requirements.';
    /**
     * The list of user `login`s allowed to bypass pull request requirements.
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BypassPullRequestAllowances\Users>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BypassPullRequestAllowances\Users::class)
     */
    private array $users = array();
    /**
     * The list of team `slug`s allowed to bypass pull request requirements.
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BypassPullRequestAllowances\Teams>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BypassPullRequestAllowances\Teams::class)
     */
    private array $teams = array();
    /**
     * The list of app `slug`s allowed to bypass pull request requirements.
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BypassPullRequestAllowances\Apps>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BypassPullRequestAllowances\Apps::class)
     */
    private array $apps = array();
    /**
     * The list of user `login`s allowed to bypass pull request requirements.
     * @return array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BypassPullRequestAllowances\Users>
     */
    public function users() : array
    {
        return $this->users;
    }
    /**
     * The list of team `slug`s allowed to bypass pull request requirements.
     * @return array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BypassPullRequestAllowances\Teams>
     */
    public function teams() : array
    {
        return $this->teams;
    }
    /**
     * The list of app `slug`s allowed to bypass pull request requirements.
     * @return array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BypassPullRequestAllowances\Apps>
     */
    public function apps() : array
    {
        return $this->apps;
    }
}
