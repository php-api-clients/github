<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class CheckSuite
{
    public const SCHEMA_TITLE       = 'CheckSuite';
    public const SCHEMA_DESCRIPTION = 'A suite of checks performed on the code of a given code change';
    private int $id;
    private string $node_id;
    private string $head_branch;
    /**
     * The SHA of the head commit that is being checked.
     */
    private string $head_sha;
    private string $status;
    private string $conclusion;
    private string $url;
    private string $before;
    private string $after;
    /**
     * @var array<PullRequestMinimal>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\PullRequestMinimal::class)
     */
    private array $pull_requests = [];
    private $app;
    /**
     * Minimal Repository
     *
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\MinimalRepository::class)
     */
    private MinimalRepository $repository;
    private string $created_at;
    private string $updated_at;
    /**
     * Simple Commit
     *
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\SimpleCommit::class)
     */
    private SimpleCommit $head_commit;
    private int $latest_check_runs_count;
    private string $check_runs_url;

    public function id(): int
    {
        return $this->id;
    }

    public function node_id(): string
    {
        return $this->node_id;
    }

    public function head_branch(): string
    {
        return $this->head_branch;
    }

    /**
     * The SHA of the head commit that is being checked.
     */
    public function head_sha(): string
    {
        return $this->head_sha;
    }

    public function status(): string
    {
        return $this->status;
    }

    public function conclusion(): string
    {
        return $this->conclusion;
    }

    public function url(): string
    {
        return $this->url;
    }

    public function before(): string
    {
        return $this->before;
    }

    public function after(): string
    {
        return $this->after;
    }

    /**
     * @return array<PullRequestMinimal>
     */
    public function pull_requests(): array
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
    public function repository(): MinimalRepository
    {
        return $this->repository;
    }

    public function created_at(): string
    {
        return $this->created_at;
    }

    public function updated_at(): string
    {
        return $this->updated_at;
    }

    /**
     * Simple Commit
     */
    public function head_commit(): SimpleCommit
    {
        return $this->head_commit;
    }

    public function latest_check_runs_count(): int
    {
        return $this->latest_check_runs_count;
    }

    public function check_runs_url(): string
    {
        return $this->check_runs_url;
    }
}
