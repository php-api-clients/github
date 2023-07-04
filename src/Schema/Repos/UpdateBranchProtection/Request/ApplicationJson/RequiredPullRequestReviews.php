<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\Repos\UpdateBranchProtection\Request\ApplicationJson;

use ApiClients\Client\GitHub\Schema;
use EventSauce\ObjectHydrator\MapFrom;

final readonly class RequiredPullRequestReviews
{
    public const SCHEMA_JSON         = '{"type":["object","null"],"properties":{"dismissal_restrictions":{"type":"object","properties":{"users":{"type":"array","items":{"type":"string"},"description":"The list of user `login`s with dismissal access"},"teams":{"type":"array","items":{"type":"string"},"description":"The list of team `slug`s with dismissal access"},"apps":{"type":"array","items":{"type":"string"},"description":"The list of app `slug`s with dismissal access"}},"description":"Specify which users, teams, and apps can dismiss pull request reviews. Pass an empty `dismissal_restrictions` object to disable. User and team `dismissal_restrictions` are only available for organization-owned repositories. Omit this parameter for personal repositories."},"dismiss_stale_reviews":{"type":"boolean","description":"Set to `true` if you want to automatically dismiss approving reviews when someone pushes a new commit."},"require_code_owner_reviews":{"type":"boolean","description":"Blocks merging pull requests until [code owners](https:\\/\\/docs.github.com\\/articles\\/about-code-owners\\/) review them."},"required_approving_review_count":{"type":"integer","description":"Specify the number of reviewers required to approve pull requests. Use a number between 1 and 6 or 0 to not require reviewers."},"require_last_push_approval":{"type":"boolean","description":"Whether the most recent push must be approved by someone other than the person who pushed it. Default: `false`.","default":false},"bypass_pull_request_allowances":{"type":"object","properties":{"users":{"type":"array","items":{"type":"string"},"description":"The list of user `login`s allowed to bypass pull request requirements."},"teams":{"type":"array","items":{"type":"string"},"description":"The list of team `slug`s allowed to bypass pull request requirements."},"apps":{"type":"array","items":{"type":"string"},"description":"The list of app `slug`s allowed to bypass pull request requirements."}},"description":"Allow specific users, teams, or apps to bypass pull request requirements."}},"description":"Require at least one approving review on a pull request, before merging. Set to `null` to disable."}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = 'Require at least one approving review on a pull request, before merging. Set to `null` to disable.';
    public const SCHEMA_EXAMPLE_DATA = '{"dismissal_restrictions":{"users":["generated","generated"],"teams":["generated","generated"],"apps":["generated","generated"]},"dismiss_stale_reviews":false,"require_code_owner_reviews":false,"required_approving_review_count":31,"require_last_push_approval":false,"bypass_pull_request_allowances":{"users":["generated","generated"],"teams":["generated","generated"],"apps":["generated","generated"]}}';

    /**
     * dismissalRestrictions: Specify which users, teams, and apps can dismiss pull request reviews. Pass an empty `dismissal_restrictions` object to disable. User and team `dismissal_restrictions` are only available for organization-owned repositories. Omit this parameter for personal repositories.
     * dismissStaleReviews: Set to `true` if you want to automatically dismiss approving reviews when someone pushes a new commit.
     * requireCodeOwnerReviews: Blocks merging pull requests until [code owners](https://docs.github.com/articles/about-code-owners/) review them.
     * requiredApprovingReviewCount: Specify the number of reviewers required to approve pull requests. Use a number between 1 and 6 or 0 to not require reviewers.
     * requireLastPushApproval: Whether the most recent push must be approved by someone other than the person who pushed it. Default: `false`.
     * bypassPullRequestAllowances: Allow specific users, teams, or apps to bypass pull request requirements.
     */
    public function __construct(#[MapFrom('dismissal_restrictions')]
    public Schema\Repos\UpdateBranchProtection\Request\ApplicationJson\RequiredPullRequestReviews\DismissalRestrictions|null $dismissalRestrictions, #[MapFrom('dismiss_stale_reviews')]
    public bool|null $dismissStaleReviews, #[MapFrom('require_code_owner_reviews')]
    public bool|null $requireCodeOwnerReviews, #[MapFrom('required_approving_review_count')]
    public int|null $requiredApprovingReviewCount, #[MapFrom('require_last_push_approval')]
    public bool|null $requireLastPushApproval, #[MapFrom('bypass_pull_request_allowances')]
    public Schema\Repos\UpdateBranchProtection\Request\ApplicationJson\RequiredPullRequestReviews\BypassPullRequestAllowances|null $bypassPullRequestAllowances,)
    {
    }
}
