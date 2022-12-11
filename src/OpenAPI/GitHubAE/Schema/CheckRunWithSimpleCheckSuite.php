<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema;

final class CheckRunWithSimpleCheckSuite
{
    public const SCHEMA_TITLE = 'CheckRun';
    public const SCHEMA_DESCRIPTION = 'A check performed on the code of a given code change';
    private $app;
    /**
     * A suite of checks performed on the code of a given code change
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\SimpleCheckSuite::class)
     */
    private \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\SimpleCheckSuite $check_suite;
    private $completed_at;
    private $conclusion;
    /**
     * A deployment created as the result of an Actions check run from a workflow that references an environment
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\DeploymentSimple::class)
     */
    private ?\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\DeploymentSimple $deployment = null;
    private string $details_url;
    private string $external_id;
    /**
     * The SHA of the commit that is being checked.
     */
    private string $head_sha;
    private string $html_url;
    /**
     * The id of the check.
     */
    private int $id;
    /**
     * The name of the check.
     */
    private string $name;
    private string $node_id;
    private array $output = array();
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\PullRequestMinimal>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\PullRequestMinimal::class)
     */
    private array $pull_requests = array();
    private string $started_at;
    /**
     * The phase of the lifecycle that the check is currently in.
     */
    private string $status;
    private string $url;
    public function app()
    {
        return $this->app;
    }
    /**
     * A suite of checks performed on the code of a given code change
     */
    public function check_suite() : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\SimpleCheckSuite
    {
        return $this->check_suite;
    }
    public function completed_at()
    {
        return $this->completed_at;
    }
    public function conclusion()
    {
        return $this->conclusion;
    }
    /**
     * A deployment created as the result of an Actions check run from a workflow that references an environment
     */
    public function deployment() : ?\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\DeploymentSimple
    {
        return $this->deployment;
    }
    public function details_url() : string
    {
        return $this->details_url;
    }
    public function external_id() : string
    {
        return $this->external_id;
    }
    /**
     * The SHA of the commit that is being checked.
     */
    public function head_sha() : string
    {
        return $this->head_sha;
    }
    public function html_url() : string
    {
        return $this->html_url;
    }
    /**
     * The id of the check.
     */
    public function id() : int
    {
        return $this->id;
    }
    /**
     * The name of the check.
     */
    public function name() : string
    {
        return $this->name;
    }
    public function node_id() : string
    {
        return $this->node_id;
    }
    public function output() : array
    {
        return $this->output;
    }
    /**
     * @return array<\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\PullRequestMinimal>
     */
    public function pull_requests() : array
    {
        return $this->pull_requests;
    }
    public function started_at() : string
    {
        return $this->started_at;
    }
    /**
     * The phase of the lifecycle that the check is currently in.
     */
    public function status() : string
    {
        return $this->status;
    }
    public function url() : string
    {
        return $this->url;
    }
}
