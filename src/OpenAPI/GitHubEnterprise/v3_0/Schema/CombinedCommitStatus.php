<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Schema;

final class CombinedCommitStatus
{
    public const SCHEMA_TITLE = 'Combined Commit Status';
    public const SPL_HASH = '000000001f1e274f000000004be6709d';
    public const SCHEMA_DESCRIPTION = 'Combined Commit Status';
    private string $state;
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Schema\SimpleCommitStatus>
     */
    private array $statuses;
    private string $sha;
    private int $total_count;
    /**
     * Minimal Repository
     */
    private object $repository;
    private string $commit_url;
    private string $url;
    public function state() : string
    {
        return $this->state;
    }
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
    public function repository() : object
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
