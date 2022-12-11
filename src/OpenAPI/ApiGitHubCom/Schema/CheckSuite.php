<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class CheckSuite
{
    public const SCHEMA_TITLE = 'CheckSuite';
    public const SCHEMA_DESCRIPTION = 'A suite of checks performed on the code of a given code change';
    private int $id;
    private string $node_id;
    private $head_branch;
    /**
     * The SHA of the head commit that is being checked.
     */
    private string $head_sha;
    private $status;
    private $conclusion;
    private $url;
    private $before;
    private $after;
    private $pull_requests;
    private $app;
    /**
     * Minimal Repository
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\MinimalRepository::class)
     */
    private \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\MinimalRepository $repository;
    private $created_at;
    private $updated_at;
    /**
     * A commit.
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\SimpleCommit::class)
     */
    private \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\SimpleCommit $head_commit;
    private int $latest_check_runs_count;
    private string $check_runs_url;
    private ?bool $rerequestable = null;
    private ?bool $runs_rerequestable = null;
    public function id() : int
    {
        return $this->id;
    }
    public function node_id() : string
    {
        return $this->node_id;
    }
    public function head_branch()
    {
        return $this->head_branch;
    }
    /**
     * The SHA of the head commit that is being checked.
     */
    public function head_sha() : string
    {
        return $this->head_sha;
    }
    public function status()
    {
        return $this->status;
    }
    public function conclusion()
    {
        return $this->conclusion;
    }
    public function url()
    {
        return $this->url;
    }
    public function before()
    {
        return $this->before;
    }
    public function after()
    {
        return $this->after;
    }
    public function pull_requests()
    {
        return $this->pull_requests;
    }
    public function app()
    {
        return $this->app;
    }
    /**
     * Minimal Repository
     */
    public function repository() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\MinimalRepository
    {
        return $this->repository;
    }
    public function created_at()
    {
        return $this->created_at;
    }
    public function updated_at()
    {
        return $this->updated_at;
    }
    /**
     * A commit.
     */
    public function head_commit() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\SimpleCommit
    {
        return $this->head_commit;
    }
    public function latest_check_runs_count() : int
    {
        return $this->latest_check_runs_count;
    }
    public function check_runs_url() : string
    {
        return $this->check_runs_url;
    }
    public function rerequestable() : ?bool
    {
        return $this->rerequestable;
    }
    public function runs_rerequestable() : ?bool
    {
        return $this->runs_rerequestable;
    }
}
