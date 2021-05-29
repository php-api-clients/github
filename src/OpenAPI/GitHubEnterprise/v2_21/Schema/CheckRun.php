<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Schema;

final class CheckRun
{
    public const SCHEMA_TITLE       = 'CheckRun';
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
    private string $external_id;
    private string $url;
    private string $html_url;
    private string $details_url;
    /**
     * The phase of the lifecycle that the check is currently in.
     */
    private string $status;
    private string $conclusion;
    private string $started_at;
    private string $completed_at;
    private array $output = [];
    /**
     * The name of the check.
     */
    private string $name;
    private array $check_suite = [];
    private $app;
    private $pull_requests;
    /**
     * A deployment created as the result of an Actions check run from a workflow that references an environment
     *
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Schema\DeploymentSimple::class)
     */
    private DeploymentSimple $deployment;

    /**
     * The id of the check.
     */
    public function id(): int
    {
        return $this->id;
    }

    /**
     * The SHA of the commit that is being checked.
     */
    public function head_sha(): string
    {
        return $this->head_sha;
    }

    public function node_id(): string
    {
        return $this->node_id;
    }

    public function external_id(): string
    {
        return $this->external_id;
    }

    public function url(): string
    {
        return $this->url;
    }

    public function html_url(): string
    {
        return $this->html_url;
    }

    public function details_url(): string
    {
        return $this->details_url;
    }

    /**
     * The phase of the lifecycle that the check is currently in.
     */
    public function status(): string
    {
        return $this->status;
    }

    public function conclusion(): string
    {
        return $this->conclusion;
    }

    public function started_at(): string
    {
        return $this->started_at;
    }

    public function completed_at(): string
    {
        return $this->completed_at;
    }

    public function output(): array
    {
        return $this->output;
    }

    /**
     * The name of the check.
     */
    public function name(): string
    {
        return $this->name;
    }

    public function check_suite(): array
    {
        return $this->check_suite;
    }

    public function app()
    {
        return $this->app;
    }

    public function pull_requests()
    {
        return $this->pull_requests;
    }

    /**
     * A deployment created as the result of an Actions check run from a workflow that references an environment
     */
    public function deployment(): DeploymentSimple
    {
        return $this->deployment;
    }
}
