<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Schema;

final class Job
{
    public const SCHEMA_TITLE = 'Job';
    public const SPL_HASH = '000000004a4ba5070000000021d13a21';
    public const SCHEMA_DESCRIPTION = 'Information of a job execution in a workflow run';
    /**
     * The id of the job.
     */
    private int $id;
    /**
     * The id of the associated workflow run.
     */
    private int $run_id;
    private string $run_url;
    private string $node_id;
    /**
     * The SHA of the commit that is being run.
     */
    private string $head_sha;
    private string $url;
    private string $html_url;
    /**
     * The phase of the lifecycle that the job is currently in.
     */
    private string $status;
    /**
     * The outcome of the job.
     */
    private string $conclusion;
    /**
     * The time that the job started, in ISO 8601 format.
     */
    private string $started_at;
    /**
     * The time that the job finished, in ISO 8601 format.
     */
    private string $completed_at;
    /**
     * The name of the job.
     */
    private string $name;
    /**
     * Steps in this job.
     */
    private array $steps;
    private string $check_run_url;
    public function id() : int
    {
        return $this->id;
    }
    public function run_id() : int
    {
        return $this->run_id;
    }
    public function run_url() : string
    {
        return $this->run_url;
    }
    public function node_id() : string
    {
        return $this->node_id;
    }
    public function head_sha() : string
    {
        return $this->head_sha;
    }
    public function url() : string
    {
        return $this->url;
    }
    public function html_url() : string
    {
        return $this->html_url;
    }
    public function status() : string
    {
        return $this->status;
    }
    public function conclusion() : string
    {
        return $this->conclusion;
    }
    public function started_at() : string
    {
        return $this->started_at;
    }
    public function completed_at() : string
    {
        return $this->completed_at;
    }
    public function name() : string
    {
        return $this->name;
    }
    public function steps() : array
    {
        return $this->steps;
    }
    public function check_run_url() : string
    {
        return $this->check_run_url;
    }
}
