<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class CombinedCommitStatus
{
    public const SCHEMA_TITLE = 'Combined Commit Status';
    public const SPL_HASH = '00000000084e11b70000000020f58f84';
    public const SCHEMA_DESCRIPTION = 'Combined Commit Status';
    private ?string $state = null;
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\SimpleCommitStatus>
     */
    private array $statuses = array();
    private ?string $sha = null;
    private ?int $total_count = null;
    /**
     * Minimal Repository
     */
    private ?object $repository = null;
    private ?string $commit_url = null;
    private ?string $url = null;
    public function state() : ?string
    {
        return $this->state;
    }
    public function statuses() : array
    {
        return $this->statuses;
    }
    public function sha() : ?string
    {
        return $this->sha;
    }
    public function total_count() : ?int
    {
        return $this->total_count;
    }
    public function repository() : ?object
    {
        return $this->repository;
    }
    public function commit_url() : ?string
    {
        return $this->commit_url;
    }
    public function url() : ?string
    {
        return $this->url;
    }
}
