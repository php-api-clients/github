<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Repos\UpdateBranchProtection\Request\Applicationjson\RequiredPullRequestReviews;

final readonly class BypassPullRequestAllowances
{
    public const SCHEMA_JSON        = '{"type":"object","properties":{"users":{"type":"array","items":{"type":"string"},"description":"The list of user `login`s allowed to bypass pull request requirements."},"teams":{"type":"array","items":{"type":"string"},"description":"The list of team `slug`s allowed to bypass pull request requirements."},"apps":{"type":"array","items":{"type":"string"},"description":"The list of app `slug`s allowed to bypass pull request requirements."}},"description":"Allow specific users, teams, or apps to bypass pull request requirements."}';
    public const SCHEMA_TITLE       = '';
    public const SCHEMA_DESCRIPTION = 'Allow specific users, teams, or apps to bypass pull request requirements.';
    /**
     * The list of user `login`s allowed to bypass pull request requirements.
     */
    public ?array $users;
    /**
     * The list of team `slug`s allowed to bypass pull request requirements.
     */
    public ?array $teams;
    /**
     * The list of app `slug`s allowed to bypass pull request requirements.
     */
    public ?array $apps;

    public function __construct(array $users, array $teams, array $apps)
    {
        $this->users = $users;
        $this->teams = $teams;
        $this->apps  = $apps;
    }
}
