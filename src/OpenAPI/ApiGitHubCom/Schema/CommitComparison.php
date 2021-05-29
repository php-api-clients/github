<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

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
     */
    private array $base_commit = [];
    /**
     * Commit
     */
    private array $merge_base_commit = [];
    private ?string $status          = null;
    private ?int $ahead_by           = null;
    private ?int $behind_by          = null;
    private ?int $total_commits      = null;
    /**
     * @var array<Commit>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Commit::class)
     */
    private array $commits = [];
    /**
     * @var array<DiffEntry>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\DiffEntry::class)
     */
    private array $files = [];

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

    public function base_commit(): array
    {
        return $this->base_commit;
    }

    public function merge_base_commit(): array
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

    public function commits(): array
    {
        return $this->commits;
    }

    public function files(): array
    {
        return $this->files;
    }
}
