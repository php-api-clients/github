<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WebhookWorkflowJobQueued;

final readonly class WorkflowJob
{
    public const SCHEMA_JSON        = '{"required":["id","run_id","run_url","run_attempt","node_id","head_sha","url","html_url","status","conclusion","started_at","completed_at","name","steps","check_run_url","labels","runner_id","runner_name","runner_group_id","runner_group_name","workflow_name","head_branch"],"type":"object","properties":{"check_run_url":{"type":"string","format":"uri"},"completed_at":{"type":["string","null"]},"conclusion":{"type":["string","null"]},"head_sha":{"type":"string"},"html_url":{"type":"string","format":"uri"},"id":{"type":"integer"},"labels":{"type":"array","items":{"type":"string"}},"name":{"type":"string"},"node_id":{"type":"string"},"run_attempt":{"type":"integer"},"run_id":{"type":"number"},"run_url":{"type":"string","format":"uri"},"runner_group_id":{"type":["integer","null"]},"runner_group_name":{"type":["string","null"]},"runner_id":{"type":["integer","null"]},"runner_name":{"type":["string","null"]},"started_at":{"type":"string","format":"date-time"},"status":{"enum":["queued","in_progress","completed","waiting"],"type":"string"},"head_branch":{"type":["string","null"],"description":"The name of the current branch."},"workflow_name":{"type":["string","null"],"description":"The name of the workflow."},"steps":{"type":"array","items":{"title":"Workflow Step","required":["name","status","conclusion","number","started_at","completed_at"],"type":"object","properties":{"completed_at":{"type":["string","null"]},"conclusion":{"enum":["failure","skipped","success","cancelled",null],"type":["string","null"]},"name":{"type":"string"},"number":{"type":"integer"},"started_at":{"type":["string","null"]},"status":{"enum":["completed","in_progress","queued","pending"],"type":"string"}}}},"url":{"type":"string","format":"uri"}}}';
    public const SCHEMA_TITLE       = '';
    public const SCHEMA_DESCRIPTION = '';
    public ?string $check_run_url;
    public ?string $completed_at;
    public ?string $conclusion;
    public ?string $head_sha;
    public ?string $html_url;
    public ?int $id;
    public ?array $labels;
    public ?string $name;
    public ?string $node_id;
    public ?int $run_attempt;
    public ?int $run_id;
    public ?string $run_url;
    public ?int $runner_group_id;
    public ?string $runner_group_name;
    public ?int $runner_id;
    public ?string $runner_name;
    public ?string $started_at;
    public ?string $status;
    /**
     * The name of the current branch.
     */
    public ?string $head_branch;
    /**
     * The name of the workflow.
     */
    public ?string $workflow_name;
    public ?array $steps;
    public ?string $url;

    public function __construct(string $check_run_url, string $completed_at, string $conclusion, string $head_sha, string $html_url, int $id, array $labels, string $name, string $node_id, int $run_attempt, int $run_id, string $run_url, int $runner_group_id, string $runner_group_name, int $runner_id, string $runner_name, string $started_at, string $status, string $head_branch, string $workflow_name, array $steps, string $url)
    {
        $this->check_run_url     = $check_run_url;
        $this->completed_at      = $completed_at;
        $this->conclusion        = $conclusion;
        $this->head_sha          = $head_sha;
        $this->html_url          = $html_url;
        $this->id                = $id;
        $this->labels            = $labels;
        $this->name              = $name;
        $this->node_id           = $node_id;
        $this->run_attempt       = $run_attempt;
        $this->run_id            = $run_id;
        $this->run_url           = $run_url;
        $this->runner_group_id   = $runner_group_id;
        $this->runner_group_name = $runner_group_name;
        $this->runner_id         = $runner_id;
        $this->runner_name       = $runner_name;
        $this->started_at        = $started_at;
        $this->status            = $status;
        $this->head_branch       = $head_branch;
        $this->workflow_name     = $workflow_name;
        $this->steps             = $steps;
        $this->url               = $url;
    }
}
