<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Schema;

final class CombinedCommitStatus
{
    public const SCHEMA_TITLE       = 'Combined Commit Status';
    public const SCHEMA_DESCRIPTION = 'Combined Commit Status';
    private string $state;
    private array $statuses = [];
    private string $sha;
    private int $total_count;
    /**
     * Minimal Repository
     *
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Schema\MinimalRepository::class)
     */
    private MinimalRepository $repository;
    private string $commit_url;
    private string $url;

    public function state(): string
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

    public function sha(): string
    {
        return $this->sha;
    }

    public function total_count(): int
    {
        return $this->total_count;
    }

    /**
     * Minimal Repository
     */
    public function repository(): MinimalRepository
    {
        return $this->repository;
    }

    public function commit_url(): string
    {
        return $this->commit_url;
    }

    public function url(): string
    {
        return $this->url;
    }
}
