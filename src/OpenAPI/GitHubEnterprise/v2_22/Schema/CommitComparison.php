<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Schema;

final class CommitComparison
{
    public const SCHEMA_TITLE       = 'Commit Comparison';
    public const SCHEMA_DESCRIPTION = 'Commit Comparison';
    private ?string $url            = null;
    private ?string $html_url       = null;
    private ?string $permalink_url  = null;
    private ?string $diff_url       = null;
    private ?string $patch_url      = null;
    /**
     * Commit
     *
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Schema\Commit::class)
     */
    private ?Commit $base_commit = null;
    /**
     * Commit
     *
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Schema\Commit::class)
     */
    private ?Commit $merge_base_commit = null;
    private ?string $status            = null;
    private ?int $ahead_by             = null;
    private ?int $behind_by            = null;
    private ?int $total_commits        = null;
    private array $commits             = [];
    private array $files               = [];

    public function url(): ?string
    {
        return $this->url;
    }

    public function html_url(): ?string
    {
        return $this->html_url;
    }

    public function permalink_url(): ?string
    {
        return $this->permalink_url;
    }

    public function diff_url(): ?string
    {
        return $this->diff_url;
    }

    public function patch_url(): ?string
    {
        return $this->patch_url;
    }

    /**
     * Commit
     */
    public function base_commit(): ?Commit
    {
        return $this->base_commit;
    }

    /**
     * Commit
     */
    public function merge_base_commit(): ?Commit
    {
        return $this->merge_base_commit;
    }

    public function status(): ?string
    {
        return $this->status;
    }

    public function ahead_by(): ?int
    {
        return $this->ahead_by;
    }

    public function behind_by(): ?int
    {
        return $this->behind_by;
    }

    public function total_commits(): ?int
    {
        return $this->total_commits;
    }

    /**
     * @return array<Commit>
     */
    public function commits(): array
    {
        return $this->commits;
    }

    /**
     * @return array<DiffEntry>
     */
    public function files(): array
    {
        return $this->files;
    }
}
