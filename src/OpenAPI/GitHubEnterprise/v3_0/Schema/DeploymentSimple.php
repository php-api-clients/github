<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Schema;

final class DeploymentSimple
{
    public const SCHEMA_TITLE = 'Deployment';
    public const SPL_HASH = '0000000065dd6f81000000006352672d';
    public const SCHEMA_DESCRIPTION = 'A deployment created as the result of an Actions check run from a workflow that references an environment';
    private string $url;
    /**
     * Unique identifier of the deployment
     */
    private int $id;
    private string $node_id;
    /**
     * Parameter to specify a task to execute
     */
    private string $task;
    private string $original_environment;
    /**
     * Name for the target deployment environment.
     */
    private string $environment;
    private string $description;
    private string $created_at;
    private string $updated_at;
    private string $statuses_url;
    private string $repository_url;
    /**
     * Specifies if the given environment is will no longer exist at some point in the future. Default: false.
     */
    private boolean $transient_environment;
    /**
     * Specifies if the given environment is one that end-users directly interact with. Default: false.
     */
    private boolean $production_environment;
    private $performed_via_github_app;
    public function url() : string
    {
        return $this->url;
    }
    public function id() : int
    {
        return $this->id;
    }
    public function node_id() : string
    {
        return $this->node_id;
    }
    public function task() : string
    {
        return $this->task;
    }
    public function original_environment() : string
    {
        return $this->original_environment;
    }
    public function environment() : string
    {
        return $this->environment;
    }
    public function description() : string
    {
        return $this->description;
    }
    public function created_at() : string
    {
        return $this->created_at;
    }
    public function updated_at() : string
    {
        return $this->updated_at;
    }
    public function statuses_url() : string
    {
        return $this->statuses_url;
    }
    public function repository_url() : string
    {
        return $this->repository_url;
    }
    public function transient_environment() : boolean
    {
        return $this->transient_environment;
    }
    public function production_environment() : boolean
    {
        return $this->production_environment;
    }
    public function performed_via_github_app()
    {
        return $this->performed_via_github_app;
    }
}
