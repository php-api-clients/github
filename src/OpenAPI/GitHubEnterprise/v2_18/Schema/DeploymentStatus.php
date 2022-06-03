<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Schema;

final class DeploymentStatus
{
    public const SCHEMA_TITLE = 'Deployment Status';
    public const SCHEMA_DESCRIPTION = 'The status of a deployment.';
    private string $url;
    private int $id;
    private string $node_id;
    /**
     * The state of the status.
     */
    private string $state;
    /**
     * Simple User
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Schema\NullableSimpleUser::class)
     */
    private ?\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Schema\NullableSimpleUser $creator = null;
    /**
     * A short description of the status.
     */
    private string $description;
    /**
     * The environment of the deployment that the status is for.
     */
    private ?string $environment = null;
    /**
     * Deprecated: the URL to associate with this status.
     */
    private string $target_url;
    private string $created_at;
    private string $updated_at;
    private string $deployment_url;
    private string $repository_url;
    /**
     * The URL for accessing your environment.
     */
    private ?string $environment_url = null;
    /**
     * The URL to associate with this status.
     */
    private ?string $log_url = null;
    /**
     * GitHub apps are a new way to extend GitHub. They can be installed directly on organizations and user accounts and granted access to specific repositories. They come with granular permissions and built-in webhooks. GitHub apps are first class actors within GitHub.
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Schema\NullableIntegration::class)
     */
    private ?\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Schema\NullableIntegration $performed_via_github_app = null;
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
    /**
     * The state of the status.
     */
    public function state() : string
    {
        return $this->state;
    }
    /**
     * Simple User
     */
    public function creator() : ?\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Schema\NullableSimpleUser
    {
        return $this->creator;
    }
    /**
     * A short description of the status.
     */
    public function description() : string
    {
        return $this->description;
    }
    /**
     * The environment of the deployment that the status is for.
     */
    public function environment() : ?string
    {
        return $this->environment;
    }
    /**
     * Deprecated: the URL to associate with this status.
     */
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
    /**
     * The URL for accessing your environment.
     */
    public function environment_url() : ?string
    {
        return $this->environment_url;
    }
    /**
     * The URL to associate with this status.
     */
    public function log_url() : ?string
    {
        return $this->log_url;
    }
    /**
     * GitHub apps are a new way to extend GitHub. They can be installed directly on organizations and user accounts and granted access to specific repositories. They come with granular permissions and built-in webhooks. GitHub apps are first class actors within GitHub.
     */
    public function performed_via_github_app() : ?\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Schema\NullableIntegration
    {
        return $this->performed_via_github_app;
    }
}
