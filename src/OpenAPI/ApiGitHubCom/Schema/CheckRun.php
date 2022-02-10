<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class CheckRun
{
    public const SCHEMA_TITLE = 'CheckRun';
    public const SCHEMA_DESCRIPTION = 'A check performed on the code of a given code change';
    /**
     * The id of the check.
     */
    private int $id;
    /**
     * The SHA of the commit that is being checked.
     */
    private string $head_sha;
    private string $node_id;
    private ?string $external_id = null;
    private string $url;
    private ?string $html_url = null;
    private ?string $details_url = null;
    /**
     * The phase of the lifecycle that the check is currently in.
     */
    private string $status;
    private ?string $conclusion = null;
    private ?string $started_at = null;
    private ?string $completed_at = null;
    private array $output = array();
    /**
     * The name of the check.
     */
    private string $name;
    private array $check_suite = array();
    /**
     * GitHub apps are a new way to extend GitHub. They can be installed directly on organizations and user accounts and granted access to specific repositories. They come with granular permissions and built-in webhooks. GitHub apps are first class actors within GitHub.
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\NullableIntegration::class)
     */
    private ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\NullableIntegration $app = null;
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\PullRequestMinimal>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\PullRequestMinimal::class)
     */
    private array $pull_requests = array();
    /**
     * A deployment created as the result of an Actions check run from a workflow that references an environment
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\DeploymentSimple::class)
     */
    private ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\DeploymentSimple $deployment = null;
    /**
     * The id of the check.
     */
    public function id() : int
    {
        return $this->id;
    }
    /**
     * The SHA of the commit that is being checked.
     */
    public function head_sha() : string
    {
        return $this->head_sha;
    }
    public function node_id() : string
    {
        return $this->node_id;
    }
    public function external_id() : ?string
    {
        return $this->external_id;
    }
    public function url() : string
    {
        return $this->url;
    }
    public function html_url() : ?string
    {
        return $this->html_url;
    }
    public function details_url() : ?string
    {
        return $this->details_url;
    }
    /**
     * The phase of the lifecycle that the check is currently in.
     */
    public function status() : string
    {
        return $this->status;
    }
    public function conclusion() : ?string
    {
        return $this->conclusion;
    }
    public function started_at() : ?string
    {
        return $this->started_at;
    }
    public function completed_at() : ?string
    {
        return $this->completed_at;
    }
    public function output() : array
    {
        return $this->output;
    }
    /**
     * The name of the check.
     */
    public function name() : string
    {
        return $this->name;
    }
    public function check_suite() : array
    {
        return $this->check_suite;
    }
    /**
     * GitHub apps are a new way to extend GitHub. They can be installed directly on organizations and user accounts and granted access to specific repositories. They come with granular permissions and built-in webhooks. GitHub apps are first class actors within GitHub.
     */
    public function app() : ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\NullableIntegration
    {
        return $this->app;
    }
    /**
     * @return array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\PullRequestMinimal>
     */
    public function pull_requests() : array
    {
        return $this->pull_requests;
    }
    /**
     * A deployment created as the result of an Actions check run from a workflow that references an environment
     */
    public function deployment() : ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\DeploymentSimple
    {
        return $this->deployment;
    }
}
