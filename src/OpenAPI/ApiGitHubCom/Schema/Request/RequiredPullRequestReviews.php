<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Request;

final class RequiredPullRequestReviews
{
    public const SCHEMA_JSON = '{"type":["object","null"],"properties":{"dismissal_restrictions":{"type":"object","properties":{"users":{"type":"array","items":{"type":"string"},"description":"The list of user `login`s with dismissal access"},"teams":{"type":"array","items":{"type":"string"},"description":"The list of team `slug`s with dismissal access"},"apps":{"type":"array","items":{"type":"string"},"description":"The list of app `slug`s with dismissal access"}},"description":"Specify which users, teams, and apps can dismiss pull request reviews. Pass an empty `dismissal_restrictions` object to disable. User and team `dismissal_restrictions` are only available for organization-owned repositories. Omit this parameter for personal repositories."},"dismiss_stale_reviews":{"type":"boolean","description":"Set to `true` if you want to automatically dismiss approving reviews when someone pushes a new commit."},"require_code_owner_reviews":{"type":"boolean","description":"Blocks merging pull requests until [code owners](https:\\/\\/docs.github.com\\/articles\\/about-code-owners\\/) review them."},"required_approving_review_count":{"type":"integer","description":"Specify the number of reviewers required to approve pull requests. Use a number between 1 and 6 or 0 to not require reviewers."},"require_last_push_approval":{"type":"boolean","description":"Whether the most recent push must be approved by someone other than the person who pushed it. Default: `false`.","default":false},"bypass_pull_request_allowances":{"type":"object","properties":{"users":{"type":"array","items":{"type":"string"},"description":"The list of user `login`s allowed to bypass pull request requirements."},"teams":{"type":"array","items":{"type":"string"},"description":"The list of team `slug`s allowed to bypass pull request requirements."},"apps":{"type":"array","items":{"type":"string"},"description":"The list of app `slug`s allowed to bypass pull request requirements."}},"description":"Allow specific users, teams, or apps to bypass pull request requirements."}},"description":"Require at least one approving review on a pull request, before merging. Set to `null` to disable."}';
    public const SCHEMA_TITLE = 'Request\\RequiredPullRequestReviews';
    public const SCHEMA_DESCRIPTION = 'Require at least one approving review on a pull request, before merging. Set to `null` to disable.';
    /**
     * Specify which users, teams, and apps can dismiss pull request reviews. Pass an empty `dismissal_restrictions` object to disable. User and team `dismissal_restrictions` are only available for organization-owned repositories. Omit this parameter for personal repositories.
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\RequiredPullRequestReviews\DismissalRestrictions::class)
     */
    private \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\RequiredPullRequestReviews\DismissalRestrictions $dismissal_restrictions;
    /**
     * Set to `true` if you want to automatically dismiss approving reviews when someone pushes a new commit.
     */
    private bool $dismiss_stale_reviews;
    /**
     * Blocks merging pull requests until [code owners](https://docs.github.com/articles/about-code-owners/) review them.
     */
    private bool $require_code_owner_reviews;
    /**
     * Specify the number of reviewers required to approve pull requests. Use a number between 1 and 6 or 0 to not require reviewers.
     */
    private int $required_approving_review_count;
    /**
     * Whether the most recent push must be approved by someone other than the person who pushed it. Default: `false`.
     */
    private bool $require_last_push_approval;
    /**
     * Allow specific users, teams, or apps to bypass pull request requirements.
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\RequiredPullRequestReviews\BypassPullRequestAllowances::class)
     */
    private \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\RequiredPullRequestReviews\BypassPullRequestAllowances $bypass_pull_request_allowances;
    /**
     * Specify which users, teams, and apps can dismiss pull request reviews. Pass an empty `dismissal_restrictions` object to disable. User and team `dismissal_restrictions` are only available for organization-owned repositories. Omit this parameter for personal repositories.
     */
    public function dismissal_restrictions() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\RequiredPullRequestReviews\DismissalRestrictions
    {
        return $this->dismissal_restrictions;
    }
    /**
     * Set to `true` if you want to automatically dismiss approving reviews when someone pushes a new commit.
     */
    public function dismiss_stale_reviews() : bool
    {
        return $this->dismiss_stale_reviews;
    }
    /**
     * Blocks merging pull requests until [code owners](https://docs.github.com/articles/about-code-owners/) review them.
     */
    public function require_code_owner_reviews() : bool
    {
        return $this->require_code_owner_reviews;
    }
    /**
     * Specify the number of reviewers required to approve pull requests. Use a number between 1 and 6 or 0 to not require reviewers.
     */
    public function required_approving_review_count() : int
    {
        return $this->required_approving_review_count;
    }
    /**
     * Whether the most recent push must be approved by someone other than the person who pushed it. Default: `false`.
     */
    public function require_last_push_approval() : bool
    {
        return $this->require_last_push_approval;
    }
    /**
     * Allow specific users, teams, or apps to bypass pull request requirements.
     */
    public function bypass_pull_request_allowances() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\RequiredPullRequestReviews\BypassPullRequestAllowances
    {
        return $this->bypass_pull_request_allowances;
    }
}
