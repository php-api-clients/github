<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown;

final class CCaf1De249753781Ae00B5E7Bd50D91A7
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"dismissal_restrictions":{"type":"object","properties":{"users":{"type":"array","items":{"type":"string"},"description":"The list of user `login`s with dismissal access"},"teams":{"type":"array","items":{"type":"string"},"description":"The list of team `slug`s with dismissal access"},"apps":{"type":"array","items":{"type":"string"},"description":"The list of app `slug`s with dismissal access"}},"description":"Specify which users, teams, and apps can dismiss pull request reviews. Pass an empty `dismissal_restrictions` object to disable. User and team `dismissal_restrictions` are only available for organization-owned repositories. Omit this parameter for personal repositories."},"dismiss_stale_reviews":{"type":"boolean","description":"Set to `true` if you want to automatically dismiss approving reviews when someone pushes a new commit."},"require_code_owner_reviews":{"type":"boolean","description":"Blocks merging pull requests until [code owners](https:\\/\\/docs.github.com\\/github-ae@latest\\/articles\\/about-code-owners\\/) have reviewed."},"required_approving_review_count":{"type":"integer","description":"Specifies the number of reviewers required to approve pull requests. Use a number between 1 and 6 or 0 to not require reviewers."},"bypass_pull_request_allowances":{"type":"object","properties":{"users":{"type":"array","items":{"type":"string"},"description":"The list of user `login`s allowed to bypass pull request requirements."},"teams":{"type":"array","items":{"type":"string"},"description":"The list of team `slug`s allowed to bypass pull request requirements."},"apps":{"type":"array","items":{"type":"string"},"description":"The list of app `slug`s allowed to bypass pull request requirements."}},"description":"Allow specific users, teams, or apps to bypass pull request requirements."}}}';
    public const SCHEMA_TITLE = 'c_caf1de249753781ae00b5e7bd50d91a7';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * Specify which users, teams, and apps can dismiss pull request reviews. Pass an empty `dismissal_restrictions` object to disable. User and team `dismissal_restrictions` are only available for organization-owned repositories. Omit this parameter for personal repositories.
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\CCaf1De249753781Ae00B5E7Bd50D91A7\DismissalRestrictions::class)
     */
    private \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\CCaf1De249753781Ae00B5E7Bd50D91A7\DismissalRestrictions $dismissal_restrictions;
    /**
     * Set to `true` if you want to automatically dismiss approving reviews when someone pushes a new commit.
     */
    private bool $dismiss_stale_reviews;
    /**
     * Blocks merging pull requests until [code owners](https://docs.github.com/github-ae@latest/articles/about-code-owners/) have reviewed.
     */
    private bool $require_code_owner_reviews;
    /**
     * Specifies the number of reviewers required to approve pull requests. Use a number between 1 and 6 or 0 to not require reviewers.
     */
    private int $required_approving_review_count;
    /**
     * Allow specific users, teams, or apps to bypass pull request requirements.
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\CCaf1De249753781Ae00B5E7Bd50D91A7\BypassPullRequestAllowances::class)
     */
    private \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\CCaf1De249753781Ae00B5E7Bd50D91A7\BypassPullRequestAllowances $bypass_pull_request_allowances;
    /**
     * Specify which users, teams, and apps can dismiss pull request reviews. Pass an empty `dismissal_restrictions` object to disable. User and team `dismissal_restrictions` are only available for organization-owned repositories. Omit this parameter for personal repositories.
     */
    public function dismissal_restrictions() : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\CCaf1De249753781Ae00B5E7Bd50D91A7\DismissalRestrictions
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
     * Blocks merging pull requests until [code owners](https://docs.github.com/github-ae@latest/articles/about-code-owners/) have reviewed.
     */
    public function require_code_owner_reviews() : bool
    {
        return $this->require_code_owner_reviews;
    }
    /**
     * Specifies the number of reviewers required to approve pull requests. Use a number between 1 and 6 or 0 to not require reviewers.
     */
    public function required_approving_review_count() : int
    {
        return $this->required_approving_review_count;
    }
    /**
     * Allow specific users, teams, or apps to bypass pull request requirements.
     */
    public function bypass_pull_request_allowances() : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\CCaf1De249753781Ae00B5E7Bd50D91A7\BypassPullRequestAllowances
    {
        return $this->bypass_pull_request_allowances;
    }
}
