<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema;

final class CheckSuite
{
    public const SCHEMA_TITLE = 'CheckSuite';
    public const SCHEMA_DESCRIPTION = 'A suite of checks performed on the code of a given code change';
    private int $id;
    private string $node_id;
    private ?string $head_branch = null;
    /**
     * The SHA of the head commit that is being checked.
     */
    private string $head_sha;
    private ?string $status = null;
    private ?string $conclusion = null;
    private ?string $url = null;
    private ?string $before = null;
    private ?string $after = null;
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\PullRequestMinimal>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\PullRequestMinimal::class)
     */
    private array $pull_requests = array();
    /**
     * GitHub apps are a new way to extend GitHub. They can be installed directly on organizations and user accounts and granted access to specific repositories. They come with granular permissions and built-in webhooks. GitHub apps are first class actors within GitHub.
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\NullableIntegration::class)
     */
    private ?\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\NullableIntegration $app = null;
    /**
     * Minimal Repository
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\MinimalRepository::class)
     */
    private \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\MinimalRepository $repository;
    private ?string $created_at = null;
    private ?string $updated_at = null;
    /**
     * Simple Commit
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\SimpleCommit::class)
     */
    private \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\SimpleCommit $head_commit;
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
    public function head_branch() : ?string
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
    /**
     * @return array<\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\PullRequestMinimal>
     */
    public function pull_requests() : array
    {
        return $this->pull_requests;
    }
    /**
     * GitHub apps are a new way to extend GitHub. They can be installed directly on organizations and user accounts and granted access to specific repositories. They come with granular permissions and built-in webhooks. GitHub apps are first class actors within GitHub.
     */
    public function app() : ?\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\NullableIntegration
    {
        return $this->app;
    }
    /**
     * Minimal Repository
     */
    public function repository() : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\MinimalRepository
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
    /**
     * Simple Commit
     */
    public function head_commit() : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\SimpleCommit
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
