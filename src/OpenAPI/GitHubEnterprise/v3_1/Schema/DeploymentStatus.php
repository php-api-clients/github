<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema;

final class DeploymentStatus
{
    public const SCHEMA_TITLE = 'Deployment Status';
    public const SCHEMA_DESCRIPTION = 'The status of a deployment.';
    private ?string $url = null;
    private ?int $id = null;
    private ?string $node_id = null;
    /**
     * The state of the status.
     */
    private ?string $state = null;
    private $creator;
    /**
     * A short description of the status.
     */
    private ?string $description = null;
    /**
     * The environment of the deployment that the status is for.
     */
    private ?string $environment = null;
    /**
     * Deprecated: the URL to associate with this status.
     */
    private ?string $target_url = null;
    private ?string $created_at = null;
    private ?string $updated_at = null;
    private ?string $deployment_url = null;
    private ?string $repository_url = null;
    /**
     * The URL for accessing your environment.
     */
    private ?string $environment_url = null;
    /**
     * The URL to associate with this status.
     */
    private ?string $log_url = null;
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
    public function state() : ?string
    {
        return $this->state;
    }
    public function creator()
    {
        return $this->creator;
    }
    public function description() : ?string
    {
        return $this->description;
    }
    public function environment() : ?string
    {
        return $this->environment;
    }
    public function target_url() : ?string
    {
        return $this->target_url;
    }
    public function created_at() : ?string
    {
        return $this->created_at;
    }
    public function updated_at() : ?string
    {
        return $this->updated_at;
    }
    public function deployment_url() : ?string
    {
        return $this->deployment_url;
    }
    public function repository_url() : ?string
    {
        return $this->repository_url;
    }
    public function environment_url() : ?string
    {
        return $this->environment_url;
    }
    public function log_url() : ?string
    {
        return $this->log_url;
    }
    public function performed_via_github_app()
    {
        return $this->performed_via_github_app;
    }
}
