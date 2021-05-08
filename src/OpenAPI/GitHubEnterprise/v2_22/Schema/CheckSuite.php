<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Schema;

final class CheckSuite
{
    public const SCHEMA_TITLE = 'CheckSuite';
    public const SCHEMA_DESCRIPTION = 'A suite of checks performed on the code of a given code change';
    private ?int $id = null;
    private ?string $node_id = null;
    private ?string $head_branch = null;
    /**
     * The SHA of the head commit that is being checked.
     */
    private ?string $head_sha = null;
    private ?string $status = null;
    private ?string $conclusion = null;
    private ?string $url = null;
    private ?string $before = null;
    private ?string $after = null;
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Schema\PullRequestMinimal>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Schema\PullRequestMinimal::class)
     */
    private array $pull_requests = array();
    private $app;
    /**
     * Minimal Repository
     */
    private ?object $repository = null;
    private ?string $created_at = null;
    private ?string $updated_at = null;
    /**
     * Simple Commit
     */
    private ?object $head_commit = null;
    private ?int $latest_check_runs_count = null;
    private ?string $check_runs_url = null;
    public function id() : ?int
    {
        return $this->id;
    }
    public function node_id() : ?string
    {
        return $this->node_id;
    }
    public function head_branch() : ?string
    {
        return $this->head_branch;
    }
    public function head_sha() : ?string
    {
        return $this->head_sha;
    }
    public function status() : ?string
    {
        return $this->status;
    }
    public function conclusion() : ?string
    {
        return $this->conclusion;
    }
    public function url() : ?string
    {
        return $this->url;
    }
    public function before() : ?string
    {
        return $this->before;
    }
    public function after() : ?string
    {
        return $this->after;
    }
    public function pull_requests() : array
    {
        return $this->pull_requests;
    }
    public function app()
    {
        return $this->app;
    }
    public function repository() : ?object
    {
        return $this->repository;
    }
    public function created_at() : ?string
    {
        return $this->created_at;
    }
    public function updated_at() : ?string
    {
        return $this->updated_at;
    }
    public function head_commit() : ?object
    {
        return $this->head_commit;
    }
    public function latest_check_runs_count() : ?int
    {
        return $this->latest_check_runs_count;
    }
    public function check_runs_url() : ?string
    {
        return $this->check_runs_url;
    }
}
