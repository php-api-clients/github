<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema;

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
    private $external_id;
    private string $url;
    private $html_url;
    private $details_url;
    /**
     * The phase of the lifecycle that the check is currently in.
     */
    private string $status;
    private $conclusion;
    private $started_at;
    private $completed_at;
    private array $output = array();
    /**
     * The name of the check.
     */
    private string $name;
    private $check_suite;
    private $app;
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\PullRequestMinimal>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\PullRequestMinimal::class)
     */
    private array $pull_requests = array();
    /**
     * A deployment created as the result of an Actions check run from a workflow that references an environment
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\DeploymentSimple::class)
     */
    private ?\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\DeploymentSimple $deployment = null;
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
    public function external_id()
    {
        return $this->external_id;
    }
    public function url() : string
    {
        return $this->url;
    }
    public function html_url()
    {
        return $this->html_url;
    }
    public function details_url()
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
    public function conclusion()
    {
        return $this->conclusion;
    }
    public function started_at()
    {
        return $this->started_at;
    }
    public function completed_at()
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
    public function check_suite()
    {
        return $this->check_suite;
    }
    public function app()
    {
        return $this->app;
    }
    /**
     * @return array<\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\PullRequestMinimal>
     */
    public function pull_requests() : array
    {
        return $this->pull_requests;
    }
    /**
     * A deployment created as the result of an Actions check run from a workflow that references an environment
     */
    public function deployment() : ?\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\DeploymentSimple
    {
        return $this->deployment;
    }
}
