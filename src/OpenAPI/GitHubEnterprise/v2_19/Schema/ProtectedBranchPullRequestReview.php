<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Schema;

final class ProtectedBranchPullRequestReview
{
    public const SCHEMA_TITLE = 'Protected Branch Pull Request Review';
    public const SPL_HASH = '000000006312fb7c0000000044ad25fc';
    public const SCHEMA_DESCRIPTION = 'Protected Branch Pull Request Review';
    private string $url;
    private object $dismissal_restrictions;
    private bool $dismiss_stale_reviews;
    private bool $require_code_owner_reviews;
    private int $required_approving_review_count;
    public function url() : string
    {
        return $this->url;
    }
    public function dismissal_restrictions() : object
    {
        return $this->dismissal_restrictions;
    }
    public function dismiss_stale_reviews() : bool
    {
        return $this->dismiss_stale_reviews;
    }
    public function require_code_owner_reviews() : bool
    {
        return $this->require_code_owner_reviews;
    }
    public function required_approving_review_count() : int
    {
        return $this->required_approving_review_count;
    }
}
