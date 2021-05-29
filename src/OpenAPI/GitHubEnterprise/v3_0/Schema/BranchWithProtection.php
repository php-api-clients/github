<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Schema;

final class BranchWithProtection
{
    public const SCHEMA_TITLE       = 'Branch With Protection';
    public const SCHEMA_DESCRIPTION = 'Branch With Protection';
    private ?string $name           = null;
    /**
     * Commit
     *
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Schema\Commit::class)
     */
    private ?Commit $commit  = null;
    private array $_links    = [];
    private ?bool $protected = null;
    /**
     * Branch Protection
     *
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Schema\BranchProtection::class)
     */
    private ?BranchProtection $protection         = null;
    private ?string $protection_url               = null;
    private ?string $pattern                      = null;
    private ?int $required_approving_review_count = null;

    public function name(): ?string
    {
        return $this->name;
    }

    public function commit(): ?Commit
    {
        return $this->commit;
    }

    public function _links(): array
    {
        return $this->_links;
    }

    public function protected(): ?bool
    {
        return $this->protected;
    }

    public function protection(): ?BranchProtection
    {
        return $this->protection;
    }

    public function protection_url(): ?string
    {
        return $this->protection_url;
    }

    public function pattern(): ?string
    {
        return $this->pattern;
    }

    public function required_approving_review_count(): ?int
    {
        return $this->required_approving_review_count;
    }
}
