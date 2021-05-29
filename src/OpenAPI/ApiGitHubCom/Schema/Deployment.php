<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class Deployment
{
    public const SCHEMA_TITLE       = 'Deployment';
    public const SCHEMA_DESCRIPTION = 'A request for a specific ref(branch,sha,tag) to be deployed';
    private ?string $url            = null;
    /**
     * Unique identifier of the deployment
     */
    private ?int $id         = null;
    private ?string $node_id = null;
    private ?string $sha     = null;
    /**
     * The ref to deploy. This can be a branch, tag, or sha.
     */
    private ?string $ref = null;
    /**
     * Parameter to specify a task to execute
     */
    private ?string $task = null;
    private $payload;
    private ?string $original_environment = null;
    /**
     * Name for the target deployment environment.
     */
    private ?string $environment = null;
    private ?string $description = null;
    private $creator;
    private ?string $created_at     = null;
    private ?string $updated_at     = null;
    private ?string $statuses_url   = null;
    private ?string $repository_url = null;
    /**
     * Specifies if the given environment is will no longer exist at some point in the future. Default: false.
     */
    private ?bool $transient_environment = null;
    /**
     * Specifies if the given environment is one that end-users directly interact with. Default: false.
     */
    private ?bool $production_environment = null;
    private $performed_via_github_app;

    public function url(): ?string
    {
        return $this->url;
    }

    public function id(): ?int
    {
        return $this->id;
    }

    public function node_id(): ?string
    {
        return $this->node_id;
    }

    public function sha(): ?string
    {
        return $this->sha;
    }

    public function ref(): ?string
    {
        return $this->ref;
    }

    public function task(): ?string
    {
        return $this->task;
    }

    public function payload()
    {
        return $this->payload;
    }

    public function original_environment(): ?string
    {
        return $this->original_environment;
    }

    public function environment(): ?string
    {
        return $this->environment;
    }

    public function description(): ?string
    {
        return $this->description;
    }

    public function creator()
    {
        return $this->creator;
    }

    public function created_at(): ?string
    {
        return $this->created_at;
    }

    public function updated_at(): ?string
    {
        return $this->updated_at;
    }

    public function statuses_url(): ?string
    {
        return $this->statuses_url;
    }

    public function repository_url(): ?string
    {
        return $this->repository_url;
    }

    public function transient_environment(): ?bool
    {
        return $this->transient_environment;
    }

    public function production_environment(): ?bool
    {
        return $this->production_environment;
    }

    public function performed_via_github_app()
    {
        return $this->performed_via_github_app;
    }
}
