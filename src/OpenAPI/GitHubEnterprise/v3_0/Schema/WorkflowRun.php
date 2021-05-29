<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Schema;

final class WorkflowRun
{
    public const SCHEMA_TITLE       = 'Workflow Run';
    public const SCHEMA_DESCRIPTION = 'An invocation of a workflow';
    /**
     * The ID of the workflow run.
     */
    private ?int $id = null;
    /**
     * The name of the workflow run.
     */
    private ?string $name    = null;
    private ?string $node_id = null;
    /**
     * The ID of the associated check suite.
     */
    private ?int $check_suite_id = null;
    /**
     * The node ID of the associated check suite.
     */
    private ?string $check_suite_node_id = null;
    private ?string $head_branch         = null;
    /**
     * The SHA of the head commit that points to the version of the worflow being run.
     */
    private ?string $head_sha = null;
    /**
     * The auto incrementing run number for the workflow run.
     */
    private ?int $run_number    = null;
    private ?string $event      = null;
    private ?string $status     = null;
    private ?string $conclusion = null;
    /**
     * The ID of the parent workflow.
     */
    private ?int $workflow_id = null;
    /**
     * The URL to the workflow run.
     */
    private ?string $url         = null;
    private ?string $html_url    = null;
    private array $pull_requests = [];
    private ?string $created_at  = null;
    private ?string $updated_at  = null;
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
     *
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Schema\MinimalRepository::class)
     */
    private ?MinimalRepository $repository = null;
    /**
     * Minimal Repository
     *
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Schema\MinimalRepository::class)
     */
    private ?MinimalRepository $head_repository = null;
    private ?int $head_repository_id            = null;

    /**
     * The ID of the workflow run.
     */
    public function id(): ?int
    {
        return $this->id;
    }

    /**
     * The name of the workflow run.
     */
    public function name(): ?string
    {
        return $this->name;
    }

    public function node_id(): ?string
    {
        return $this->node_id;
    }

    /**
     * The ID of the associated check suite.
     */
    public function check_suite_id(): ?int
    {
        return $this->check_suite_id;
    }

    /**
     * The node ID of the associated check suite.
     */
    public function check_suite_node_id(): ?string
    {
        return $this->check_suite_node_id;
    }

    public function head_branch(): ?string
    {
        return $this->head_branch;
    }

    /**
     * The SHA of the head commit that points to the version of the worflow being run.
     */
    public function head_sha(): ?string
    {
        return $this->head_sha;
    }

    /**
     * The auto incrementing run number for the workflow run.
     */
    public function run_number(): ?int
    {
        return $this->run_number;
    }

    public function event(): ?string
    {
        return $this->event;
    }

    public function status(): ?string
    {
        return $this->status;
    }

    public function conclusion(): ?string
    {
        return $this->conclusion;
    }

    /**
     * The ID of the parent workflow.
     */
    public function workflow_id(): ?int
    {
        return $this->workflow_id;
    }

    /**
     * The URL to the workflow run.
     */
    public function url(): ?string
    {
        return $this->url;
    }

    public function html_url(): ?string
    {
        return $this->html_url;
    }

    /**
     * @return array<PullRequestMinimal>
     */
    public function pull_requests(): array
    {
        return $this->pull_requests;
    }

    public function created_at(): ?string
    {
        return $this->created_at;
    }

    public function updated_at(): ?string
    {
        return $this->updated_at;
    }

    /**
     * The URL to the jobs for the workflow run.
     */
    public function jobs_url(): ?string
    {
        return $this->jobs_url;
    }

    /**
     * The URL to download the logs for the workflow run.
     */
    public function logs_url(): ?string
    {
        return $this->logs_url;
    }

    /**
     * The URL to the associated check suite.
     */
    public function check_suite_url(): ?string
    {
        return $this->check_suite_url;
    }

    /**
     * The URL to the artifacts for the workflow run.
     */
    public function artifacts_url(): ?string
    {
        return $this->artifacts_url;
    }

    /**
     * The URL to cancel the workflow run.
     */
    public function cancel_url(): ?string
    {
        return $this->cancel_url;
    }

    /**
     * The URL to rerun the workflow run.
     */
    public function rerun_url(): ?string
    {
        return $this->rerun_url;
    }

    /**
     * The URL to the workflow.
     */
    public function workflow_url(): ?string
    {
        return $this->workflow_url;
    }

    public function head_commit()
    {
        return $this->head_commit;
    }

    /**
     * Minimal Repository
     */
    public function repository(): ?MinimalRepository
    {
        return $this->repository;
    }

    /**
     * Minimal Repository
     */
    public function head_repository(): ?MinimalRepository
    {
        return $this->head_repository;
    }

    public function head_repository_id(): ?int
    {
        return $this->head_repository_id;
    }
}
