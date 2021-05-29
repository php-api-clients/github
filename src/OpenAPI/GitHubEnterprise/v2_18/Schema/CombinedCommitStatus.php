<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Schema;

final class CombinedCommitStatus
{
    public const SCHEMA_TITLE       = 'Combined Commit Status';
    public const SCHEMA_DESCRIPTION = 'Combined Commit Status';
    private ?string $state          = null;
    private array $statuses         = [];
    private ?string $sha            = null;
    private ?int $total_count       = null;
    /**
     * Minimal Repository
     *
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Schema\MinimalRepository::class)
     */
    private ?MinimalRepository $repository = null;
    private ?string $commit_url            = null;
    private ?string $url                   = null;

    public function state(): ?string
    {
        return $this->state;
    }

    /**
     * @return array<SimpleCommitStatus>
     */
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

    /**
     * Minimal Repository
     */
    public function repository(): ?MinimalRepository
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
