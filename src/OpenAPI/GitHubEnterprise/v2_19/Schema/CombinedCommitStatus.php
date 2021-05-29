<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Schema;

final class CombinedCommitStatus
{
    public const SCHEMA_TITLE       = 'Combined Commit Status';
    public const SCHEMA_DESCRIPTION = 'Combined Commit Status';
    private ?string $state          = null;
    /**
     * @var array<SimpleCommitStatus>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Schema\SimpleCommitStatus::class)
     */
    private array $statuses   = [];
    private ?string $sha      = null;
    private ?int $total_count = null;
    /**
     * Minimal Repository
     */
    private array $repository   = [];
    private ?string $commit_url = null;
    private ?string $url        = null;

    public function state(): ?string
    {
        return $this->state;
    }

    public function statuses(): array
    {
        return $this->statuses;
    }

    public function sha(): ?string
    {
        return $this->sha;
    }

    public function total_count(): ?int
    {
        return $this->total_count;
    }

    public function repository(): array
    {
        return $this->repository;
    }

    public function commit_url(): ?string
    {
        return $this->commit_url;
    }

    public function url(): ?string
    {
        return $this->url;
    }
}
