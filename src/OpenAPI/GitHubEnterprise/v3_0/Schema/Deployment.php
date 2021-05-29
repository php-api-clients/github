<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Schema;

final class Deployment
{
    public const SCHEMA_TITLE       = 'Deployment';
    public const SCHEMA_DESCRIPTION = 'A request for a specific ref(branch,sha,tag) to be deployed';
    private string $url;
    /**
     * Unique identifier of the deployment
     */
    private int $id;
    private string $node_id;
    private string $sha;
    /**
     * The ref to deploy. This can be a branch, tag, or sha.
     */
    private string $ref;
    /**
     * Parameter to specify a task to execute
     */
    private string $task;
    private $payload;
    private string $original_environment;
    /**
     * Name for the target deployment environment.
     */
    private string $environment;
    private string $description;
    private $creator;
    private string $created_at;
    private string $updated_at;
    private string $statuses_url;
    private string $repository_url;
    /**
     * Specifies if the given environment is will no longer exist at some point in the future. Default: false.
     */
    private bool $transient_environment;
    /**
     * Specifies if the given environment is one that end-users directly interact with. Default: false.
     */
    private bool $production_environment;
    private $performed_via_github_app;

    public function url(): string
    {
        return $this->url;
    }

    /**
     * Unique identifier of the deployment
     */
    public function id(): int
    {
        return $this->id;
    }

    public function node_id(): string
    {
        return $this->node_id;
    }

    public function sha(): string
    {
        return $this->sha;
    }

    /**
     * The ref to deploy. This can be a branch, tag, or sha.
     */
    public function ref(): string
    {
        return $this->ref;
    }

    /**
     * Parameter to specify a task to execute
     */
    public function task(): string
    {
        return $this->task;
    }

    public function payload()
    {
        return $this->payload;
    }

    public function original_environment(): string
    {
        return $this->original_environment;
    }

    /**
     * Name for the target deployment environment.
     */
    public function environment(): string
    {
        return $this->environment;
    }

    public function description(): string
    {
        return $this->description;
    }

    public function creator()
    {
        return $this->creator;
    }

    public function created_at(): string
    {
        return $this->created_at;
    }

    public function updated_at(): string
    {
        return $this->updated_at;
    }

    public function statuses_url(): string
    {
        return $this->statuses_url;
    }

    public function repository_url(): string
    {
        return $this->repository_url;
    }

    /**
     * Specifies if the given environment is will no longer exist at some point in the future. Default: false.
     */
    public function transient_environment(): bool
    {
        return $this->transient_environment;
    }

    /**
     * Specifies if the given environment is one that end-users directly interact with. Default: false.
     */
    public function production_environment(): bool
    {
        return $this->production_environment;
    }

    public function performed_via_github_app()
    {
        return $this->performed_via_github_app;
    }
}
