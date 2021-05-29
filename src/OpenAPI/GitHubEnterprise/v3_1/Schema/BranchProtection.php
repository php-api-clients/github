<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema;

final class BranchProtection
{
    public const SCHEMA_TITLE             = 'Branch Protection';
    public const SCHEMA_DESCRIPTION       = 'Branch Protection';
    private ?string $url                  = null;
    private array $required_status_checks = [];
    /**
     * Protected Branch Admin Enforced
     *
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\ProtectedBranchAdminEnforced::class)
     */
    private ?ProtectedBranchAdminEnforced $enforce_admins = null;
    /**
     * Protected Branch Pull Request Review
     *
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\ProtectedBranchPullRequestReview::class)
     */
    private ?ProtectedBranchPullRequestReview $required_pull_request_reviews = null;
    /**
     * Branch Restriction Policy
     *
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BranchRestrictionPolicy::class)
     */
    private ?BranchRestrictionPolicy $restrictions  = null;
    private array $required_linear_history          = [];
    private array $allow_force_pushes               = [];
    private array $allow_deletions                  = [];
    private array $required_conversation_resolution = [];
    private ?string $name                           = null;
    private ?string $protection_url                 = null;
    private array $required_signatures              = [];

    public function url(): ?string
    {
        return $this->url;
    }

    public function required_status_checks(): array
    {
        return $this->required_status_checks;
    }

    public function enforce_admins(): ?ProtectedBranchAdminEnforced
    {
        return $this->enforce_admins;
    }

    public function required_pull_request_reviews(): ?ProtectedBranchPullRequestReview
    {
        return $this->required_pull_request_reviews;
    }

    public function restrictions(): ?BranchRestrictionPolicy
    {
        return $this->restrictions;
    }

    public function required_linear_history(): array
    {
        return $this->required_linear_history;
    }

    public function allow_force_pushes(): array
    {
        return $this->allow_force_pushes;
    }

    public function allow_deletions(): array
    {
        return $this->allow_deletions;
    }

    public function required_conversation_resolution(): array
    {
        return $this->required_conversation_resolution;
    }

    public function name(): ?string
    {
        return $this->name;
    }

    public function protection_url(): ?string
    {
        return $this->protection_url;
    }

    public function required_signatures(): array
    {
        return $this->required_signatures;
    }
}
