<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Schema;

final class DeploymentSimple
{
    public const SCHEMA_TITLE = 'Deployment';
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
    private ?string $original_environment = null;
    /**
     * Name for the target deployment environment.
     */
    private string $environment;
    private ?string $description = null;
    private string $created_at;
    private string $updated_at;
    private string $statuses_url;
    private string $repository_url;
    /**
     * Specifies if the given environment is will no longer exist at some point in the future. Default: false.
     */
    private ?bool $transient_environment = null;
    /**
     * Specifies if the given environment is one that end-users directly interact with. Default: false.
     */
    private ?bool $production_environment = null;
    /**
     * GitHub apps are a new way to extend GitHub. They can be installed directly on organizations and user accounts and granted access to specific repositories. They come with granular permissions and built-in webhooks. GitHub apps are first class actors within GitHub.
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Schema\NullableIntegration::class)
     */
    private ?\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Schema\NullableIntegration $performed_via_github_app = null;
    public function url() : string
    {
        return $this->url;
    }
    /**
     * Unique identifier of the deployment
     */
    public function id() : int
    {
        return $this->id;
    }
    public function node_id() : string
    {
        return $this->node_id;
    }
    /**
     * Parameter to specify a task to execute
     */
    public function task() : string
    {
        return $this->task;
    }
    public function original_environment() : ?string
    {
        return $this->original_environment;
    }
    /**
     * Name for the target deployment environment.
     */
    public function environment() : string
    {
        return $this->environment;
    }
    public function description() : ?string
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
    /**
     * Specifies if the given environment is will no longer exist at some point in the future. Default: false.
     */
    public function transient_environment() : ?bool
    {
        return $this->transient_environment;
    }
    /**
     * Specifies if the given environment is one that end-users directly interact with. Default: false.
     */
    public function production_environment() : ?bool
    {
        return $this->production_environment;
    }
    /**
     * GitHub apps are a new way to extend GitHub. They can be installed directly on organizations and user accounts and granted access to specific repositories. They come with granular permissions and built-in webhooks. GitHub apps are first class actors within GitHub.
     */
    public function performed_via_github_app() : ?\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Schema\NullableIntegration
    {
        return $this->performed_via_github_app;
    }
}
