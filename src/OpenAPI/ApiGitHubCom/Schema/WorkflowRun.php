<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class WorkflowRun
{
    public const SCHEMA_TITLE = 'Workflow Run';
    public const SPL_HASH = '000000000cd53e5d0000000040effa88';
    public const SCHEMA_DESCRIPTION = 'An invocation of a workflow';
    /**
     * The ID of the workflow run.
     */
    private ?int $id = null;
    /**
     * The name of the workflow run.
     */
    private ?string $name = null;
    private ?string $node_id = null;
    /**
     * The ID of the associated check suite.
     */
    private ?int $check_suite_id = null;
    /**
     * The node ID of the associated check suite.
     */
    private ?string $check_suite_node_id = null;
    private ?string $head_branch = null;
    /**
     * The SHA of the head commit that points to the version of the worflow being run.
     */
    private ?string $head_sha = null;
    /**
     * The auto incrementing run number for the workflow run.
     */
    private ?int $run_number = null;
    private ?string $event = null;
    private ?string $status = null;
    private ?string $conclusion = null;
    /**
     * The ID of the parent workflow.
     */
    private ?int $workflow_id = null;
    /**
     * The URL to the workflow run.
     */
    private ?string $url = null;
    private ?string $html_url = null;
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\PullRequestMinimal>
     */
    private array $pull_requests = array();
    private ?string $created_at = null;
    private ?string $updated_at = null;
    /**
     * The URL to the jobs for the workflow run.
     */
    private ?string $jobs_url = null;
    /**
     * The URL to download the logs for the workflow run.
     */
    private ?string $logs_url = null;
    /**
     * The URL to the associated check suite.
     */
    private ?string $check_suite_url = null;
    /**
     * The URL to the artifacts for the workflow run.
     */
    private ?string $artifacts_url = null;
    /**
     * The URL to cancel the workflow run.
     */
    private ?string $cancel_url = null;
    /**
     * The URL to rerun the workflow run.
     */
    private ?string $rerun_url = null;
    /**
     * The URL to the workflow.
     */
    private ?string $workflow_url = null;
    private $head_commit;
    /**
     * Minimal Repository
     */
    private ?object $repository = null;
    /**
     * Minimal Repository
     */
    private ?object $head_repository = null;
    private ?int $head_repository_id = null;
    public function id() : ?int
    {
        return $this->id;
    }
    public function name() : ?string
    {
        return $this->name;
    }
    public function node_id() : ?string
    {
        return $this->node_id;
    }
    public function check_suite_id() : ?int
    {
        return $this->check_suite_id;
    }
    public function check_suite_node_id() : ?string
    {
        return $this->check_suite_node_id;
    }
    public function head_branch() : ?string
    {
        return $this->head_branch;
    }
    public function head_sha() : ?string
    {
        return $this->head_sha;
    }
    public function run_number() : ?int
    {
        return $this->run_number;
    }
    public function event() : ?string
    {
        return $this->event;
    }
    public function status() : ?string
    {
        return $this->status;
    }
    public function conclusion() : ?string
    {
        return $this->conclusion;
    }
    public function workflow_id() : ?int
    {
        return $this->workflow_id;
    }
    public function url() : ?string
    {
        return $this->url;
    }
    public function html_url() : ?string
    {
        return $this->html_url;
    }
    public function pull_requests() : array
    {
        return $this->pull_requests;
    }
    public function created_at() : ?string
    {
        return $this->created_at;
    }
    public function updated_at() : ?string
    {
        return $this->updated_at;
    }
    public function jobs_url() : ?string
    {
        return $this->jobs_url;
    }
    public function logs_url() : ?string
    {
        return $this->logs_url;
    }
    public function check_suite_url() : ?string
    {
        return $this->check_suite_url;
    }
    public function artifacts_url() : ?string
    {
        return $this->artifacts_url;
    }
    public function cancel_url() : ?string
    {
        return $this->cancel_url;
    }
    public function rerun_url() : ?string
    {
        return $this->rerun_url;
    }
    public function workflow_url() : ?string
    {
        return $this->workflow_url;
    }
    public function head_commit()
    {
        return $this->head_commit;
    }
    public function repository() : ?object
    {
        return $this->repository;
    }
    public function head_repository() : ?object
    {
        return $this->head_repository;
    }
    public function head_repository_id() : ?int
    {
        return $this->head_repository_id;
    }
}
