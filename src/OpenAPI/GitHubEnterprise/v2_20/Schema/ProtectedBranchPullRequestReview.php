<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Schema;

final class ProtectedBranchPullRequestReview
{
    public const SCHEMA_TITLE = 'Protected Branch Pull Request Review';
    public const SCHEMA_DESCRIPTION = 'Protected Branch Pull Request Review';
    private ?string $url = null;
    private array $dismissal_restrictions = array();
    private ?bool $dismiss_stale_reviews = null;
    private ?bool $require_code_owner_reviews = null;
    private ?int $required_approving_review_count = null;
    public function url() : ?string
    {
        return $this->url;
    }
    public function dismissal_restrictions() : array
    {
        return $this->dismissal_restrictions;
    }
    public function dismiss_stale_reviews() : ?bool
    {
        return $this->dismiss_stale_reviews;
    }
    public function require_code_owner_reviews() : ?bool
    {
        return $this->require_code_owner_reviews;
    }
    public function required_approving_review_count() : ?int
    {
        return $this->required_approving_review_count;
    }
}
