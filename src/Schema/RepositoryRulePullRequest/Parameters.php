<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\RepositoryRulePullRequest;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class Parameters
{
    public const SCHEMA_JSON         = '{"required":["dismiss_stale_reviews_on_push","require_code_owner_review","require_last_push_approval","required_approving_review_count","required_review_thread_resolution"],"type":"object","properties":{"dismiss_stale_reviews_on_push":{"type":"boolean","description":"New, reviewable commits pushed will dismiss previous pull request review approvals."},"require_code_owner_review":{"type":"boolean","description":"Require an approving review in pull requests that modify files that have a designated code owner."},"require_last_push_approval":{"type":"boolean","description":"Whether the most recent reviewable push must be approved by someone other than the person who pushed it."},"required_approving_review_count":{"maximum":10,"minimum":0,"type":"integer","description":"The number of approving reviews that are required before a pull request can be merged."},"required_review_thread_resolution":{"type":"boolean","description":"All conversations on code must be resolved before a pull request can be merged."}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"dismiss_stale_reviews_on_push":false,"require_code_owner_review":false,"require_last_push_approval":false,"required_approving_review_count":31,"required_review_thread_resolution":false}';

    /**
     * dismissStaleReviewsOnPush: New, reviewable commits pushed will dismiss previous pull request review approvals.
     * requireCodeOwnerReview: Require an approving review in pull requests that modify files that have a designated code owner.
     * requireLastPushApproval: Whether the most recent reviewable push must be approved by someone other than the person who pushed it.
     * requiredApprovingReviewCount: The number of approving reviews that are required before a pull request can be merged.
     * requiredReviewThreadResolution: All conversations on code must be resolved before a pull request can be merged.
     */
    public function __construct(#[MapFrom('dismiss_stale_reviews_on_push')] public bool $dismissStaleReviewsOnPush, #[MapFrom('require_code_owner_review')] public bool $requireCodeOwnerReview, #[MapFrom('require_last_push_approval')] public bool $requireLastPushApproval, #[MapFrom('required_approving_review_count')] public int $requiredApprovingReviewCount, #[MapFrom('required_review_thread_resolution')] public bool $requiredReviewThreadResolution)
    {
    }
}
