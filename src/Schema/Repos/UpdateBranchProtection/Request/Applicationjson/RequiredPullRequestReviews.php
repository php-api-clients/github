<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema\Repos\UpdateBranchProtection\Request\Applicationjson;

final readonly class RequiredPullRequestReviews
{
    public const SCHEMA_JSON = '{"type":["object","null"],"properties":{"dismissal_restrictions":{"type":"object","properties":{"users":{"type":"array","items":{"type":"string"},"description":"The list of user `login`s with dismissal access"},"teams":{"type":"array","items":{"type":"string"},"description":"The list of team `slug`s with dismissal access"},"apps":{"type":"array","items":{"type":"string"},"description":"The list of app `slug`s with dismissal access"}},"description":"Specify which users, teams, and apps can dismiss pull request reviews. Pass an empty `dismissal_restrictions` object to disable. User and team `dismissal_restrictions` are only available for organization-owned repositories. Omit this parameter for personal repositories."},"dismiss_stale_reviews":{"type":"boolean","description":"Set to `true` if you want to automatically dismiss approving reviews when someone pushes a new commit."},"require_code_owner_reviews":{"type":"boolean","description":"Blocks merging pull requests until [code owners](https:\\/\\/docs.github.com\\/articles\\/about-code-owners\\/) review them."},"required_approving_review_count":{"type":"integer","description":"Specify the number of reviewers required to approve pull requests. Use a number between 1 and 6 or 0 to not require reviewers."},"require_last_push_approval":{"type":"boolean","description":"Whether the most recent push must be approved by someone other than the person who pushed it. Default: `false`.","default":false},"bypass_pull_request_allowances":{"type":"object","properties":{"users":{"type":"array","items":{"type":"string"},"description":"The list of user `login`s allowed to bypass pull request requirements."},"teams":{"type":"array","items":{"type":"string"},"description":"The list of team `slug`s allowed to bypass pull request requirements."},"apps":{"type":"array","items":{"type":"string"},"description":"The list of app `slug`s allowed to bypass pull request requirements."}},"description":"Allow specific users, teams, or apps to bypass pull request requirements."}},"description":"Require at least one approving review on a pull request, before merging. Set to `null` to disable."}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = 'Require at least one approving review on a pull request, before merging. Set to `null` to disable.';
    /**
     * Specify which users, teams, and apps can dismiss pull request reviews. Pass an empty `dismissal_restrictions` object to disable. User and team `dismissal_restrictions` are only available for organization-owned repositories. Omit this parameter for personal repositories.
     */
    public ?\ApiClients\Client\Github\Schema\Repos\UpdateBranchProtection\Request\Applicationjson\RequiredPullRequestReviews\DismissalRestrictions $dismissal_restrictions;
    /**
     * Set to `true` if you want to automatically dismiss approving reviews when someone pushes a new commit.
     */
    public ?bool $dismiss_stale_reviews;
    /**
     * Blocks merging pull requests until [code owners](https://docs.github.com/articles/about-code-owners/) review them.
     */
    public ?bool $require_code_owner_reviews;
    /**
     * Specify the number of reviewers required to approve pull requests. Use a number between 1 and 6 or 0 to not require reviewers.
     */
    public ?int $required_approving_review_count;
    /**
     * Whether the most recent push must be approved by someone other than the person who pushed it. Default: `false`.
     */
    public ?bool $require_last_push_approval;
    /**
     * Allow specific users, teams, or apps to bypass pull request requirements.
     */
    public ?\ApiClients\Client\Github\Schema\Repos\UpdateBranchProtection\Request\Applicationjson\RequiredPullRequestReviews\BypassPullRequestAllowances $bypass_pull_request_allowances;
    public function __construct(\ApiClients\Client\Github\Schema\Repos\UpdateBranchProtection\Request\Applicationjson\RequiredPullRequestReviews\DismissalRestrictions $dismissal_restrictions, bool $dismiss_stale_reviews, bool $require_code_owner_reviews, int $required_approving_review_count, bool $require_last_push_approval, \ApiClients\Client\Github\Schema\Repos\UpdateBranchProtection\Request\Applicationjson\RequiredPullRequestReviews\BypassPullRequestAllowances $bypass_pull_request_allowances)
    {
        $this->dismissal_restrictions = $dismissal_restrictions;
        $this->dismiss_stale_reviews = $dismiss_stale_reviews;
        $this->require_code_owner_reviews = $require_code_owner_reviews;
        $this->required_approving_review_count = $required_approving_review_count;
        $this->require_last_push_approval = $require_last_push_approval;
        $this->bypass_pull_request_allowances = $bypass_pull_request_allowances;
    }
}
