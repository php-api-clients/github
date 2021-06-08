<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema;

final class ProtectedBranchPullRequestReview
{
    public const SCHEMA_TITLE       = 'Protected Branch Pull Request Review';
    public const SCHEMA_DESCRIPTION = 'Protected Branch Pull Request Review';
    private string $url;
    private array $dismissal_restrictions = [];
    private bool $dismiss_stale_reviews;
    private bool $require_code_owner_reviews;
    private int $required_approving_review_count;

    public function url(): string
    {
        return $this->url;
    }

    public function dismissal_restrictions(): array
    {
        return $this->dismissal_restrictions;
    }

    public function dismiss_stale_reviews(): bool
    {
        return $this->dismiss_stale_reviews;
    }

    public function require_code_owner_reviews(): bool
    {
        return $this->require_code_owner_reviews;
    }

    public function required_approving_review_count(): int
    {
        return $this->required_approving_review_count;
    }
}
