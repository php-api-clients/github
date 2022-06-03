<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema;

final class CombinedCommitStatus
{
    public const SCHEMA_TITLE = 'Combined Commit Status';
    public const SCHEMA_DESCRIPTION = 'Combined Commit Status';
    private string $state;
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\SimpleCommitStatus>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\SimpleCommitStatus::class)
     */
    private array $statuses = array();
    private string $sha;
    private int $total_count;
    /**
     * Minimal Repository
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\MinimalRepository::class)
     */
    private \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\MinimalRepository $repository;
    private string $commit_url;
    private string $url;
    public function state() : string
    {
        return $this->state;
    }
    /**
     * @return array<\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\SimpleCommitStatus>
     */
    public function statuses() : array
    {
        return $this->statuses;
    }
    public function sha() : string
    {
        return $this->sha;
    }
    public function total_count() : int
    {
        return $this->total_count;
    }
    /**
     * Minimal Repository
     */
    public function repository() : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\MinimalRepository
    {
        return $this->repository;
    }
    public function commit_url() : string
    {
        return $this->commit_url;
    }
    public function url() : string
    {
        return $this->url;
    }
}
