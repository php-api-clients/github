<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema;

final class DeploymentStatus
{
    public const SCHEMA_TITLE = 'Deployment Status';
    public const SCHEMA_DESCRIPTION = 'The status of a deployment.';
    private string $url;
    private int $id;
    private string $node_id;
    /**The state of the status.**/
    private string $state;
    private $creator;
    /**A short description of the status.**/
    private string $description;
    /**The environment of the deployment that the status is for.**/
    private string $environment;
    /**Deprecated: the URL to associate with this status.**/
    private string $target_url;
    private string $created_at;
    private string $updated_at;
    private string $deployment_url;
    private string $repository_url;
    /**The URL for accessing your environment.**/
    private string $environment_url;
    /**The URL to associate with this status.**/
    private string $log_url;
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
    public function state() : string
    {
        return $this->state;
    }
    public function creator()
    {
        return $this->creator;
    }
    public function description() : string
    {
        return $this->description;
    }
    public function environment() : string
    {
        return $this->environment;
    }
    public function target_url() : string
    {
        return $this->target_url;
    }
    public function created_at() : string
    {
        return $this->created_at;
    }
    public function updated_at() : string
    {
        return $this->updated_at;
    }
    public function deployment_url() : string
    {
        return $this->deployment_url;
    }
    public function repository_url() : string
    {
        return $this->repository_url;
    }
    public function environment_url() : string
    {
        return $this->environment_url;
    }
    public function log_url() : string
    {
        return $this->log_url;
    }
    public function performed_via_github_app()
    {
        return $this->performed_via_github_app;
    }
}
