<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Schema;

final class DeploymentSimple
{
    public const SCHEMA_TITLE = 'Deployment';
    public const SPL_HASH = '0000000036641c37000000006f97d8a9';
    public const SCHEMA_DESCRIPTION = 'A deployment created as the result of an Actions check run from a workflow that references an environment';
    private ?string $url = null;
    /**
     * Unique identifier of the deployment
     */
    private ?int $id = null;
    private ?string $node_id = null;
    /**
     * Parameter to specify a task to execute
     */
    private ?string $task = null;
    private ?string $original_environment = null;
    /**
     * Name for the target deployment environment.
     */
    private ?string $environment = null;
    private ?string $description = null;
    private ?string $created_at = null;
    private ?string $updated_at = null;
    private ?string $statuses_url = null;
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
    public function url() : ?string
    {
        return $this->url;
    }
    public function id() : ?int
    {
        return $this->id;
    }
    public function node_id() : ?string
    {
        return $this->node_id;
    }
    public function task() : ?string
    {
        return $this->task;
    }
    public function original_environment() : ?string
    {
        return $this->original_environment;
    }
    public function environment() : ?string
    {
        return $this->environment;
    }
    public function description() : ?string
    {
        return $this->description;
    }
    public function created_at() : ?string
    {
        return $this->created_at;
    }
    public function updated_at() : ?string
    {
        return $this->updated_at;
    }
    public function statuses_url() : ?string
    {
        return $this->statuses_url;
    }
    public function repository_url() : ?string
    {
        return $this->repository_url;
    }
    public function transient_environment() : ?bool
    {
        return $this->transient_environment;
    }
    public function production_environment() : ?bool
    {
        return $this->production_environment;
    }
    public function performed_via_github_app()
    {
        return $this->performed_via_github_app;
    }
}
