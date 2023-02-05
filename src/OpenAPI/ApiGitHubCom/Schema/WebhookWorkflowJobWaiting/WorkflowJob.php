<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WebhookWorkflowJobWaiting;

final class WorkflowJob
{
    public const SCHEMA_JSON = '{"required":["id","run_id","run_url","run_attempt","node_id","head_sha","url","html_url","status","conclusion","started_at","completed_at","name","steps","check_run_url","labels","runner_id","runner_name","runner_group_id","runner_group_name","workflow_name","head_branch"],"type":"object","properties":{"check_run_url":{"type":"string","format":"uri"},"completed_at":{"type":["string","null"]},"conclusion":{"type":["string","null"]},"head_sha":{"type":"string"},"html_url":{"type":"string","format":"uri"},"id":{"type":"integer"},"labels":{"type":"array","items":{"type":"string"}},"name":{"type":"string"},"node_id":{"type":"string"},"run_attempt":{"type":"integer"},"run_id":{"type":"number"},"run_url":{"type":"string","format":"uri"},"runner_group_id":{"type":["integer","null"]},"runner_group_name":{"type":["string","null"]},"runner_id":{"type":["integer","null"]},"runner_name":{"type":["string","null"]},"started_at":{"type":"string","format":"date-time"},"head_branch":{"type":["string","null"],"description":"The name of the current branch."},"workflow_name":{"type":["string","null"],"description":"The name of the workflow."},"status":{"enum":["queued","in_progress","completed","waiting"],"type":"string"},"steps":{"type":"array","items":{"title":"Workflow Step","required":["name","status","conclusion","number","started_at","completed_at"],"type":"object","properties":{"completed_at":{"type":["string","null"]},"conclusion":{"enum":["failure","skipped","success","cancelled",null],"type":["string","null"]},"name":{"type":"string"},"number":{"type":"integer"},"started_at":{"type":["string","null"]},"status":{"enum":["completed","in_progress","queued","pending","waiting"],"type":"string"}}}},"url":{"type":"string","format":"uri"}}}';
    public const SCHEMA_TITLE = 'WebhookWorkflowJobWaiting\\WorkflowJob';
    public const SCHEMA_DESCRIPTION = '';
    public readonly string $check_run_url;
    public readonly ?string $completed_at;
    public readonly ?string $conclusion;
    public readonly string $head_sha;
    public readonly string $html_url;
    public readonly int $id;
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WorkflowJob\Labels>
     */
    public readonly array $labels;
    public readonly string $name;
    public readonly string $node_id;
    public readonly int $run_attempt;
    public readonly int $run_id;
    public readonly string $run_url;
    public readonly ?int $runner_group_id;
    public readonly ?string $runner_group_name;
    public readonly ?int $runner_id;
    public readonly ?string $runner_name;
    public readonly string $started_at;
    /**
     * The name of the current branch.
     */
    public readonly ?string $head_branch;
    /**
     * The name of the workflow.
     */
    public readonly ?string $workflow_name;
    public readonly string $status;
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WorkflowJob\Steps>
     */
    public readonly array $steps;
    public readonly string $url;
    /**
     * @param array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WorkflowJob\Labels> $labels
     * @param array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WorkflowJob\Steps> $steps
     */
    public function __construct(string $check_run_url, string $completed_at, string $conclusion, string $head_sha, string $html_url, int $id, array $labels, string $name, string $node_id, int $run_attempt, int $run_id, string $run_url, int $runner_group_id, string $runner_group_name, int $runner_id, string $runner_name, string $started_at, string $head_branch, string $workflow_name, string $status, array $steps, string $url)
    {
        $this->check_run_url = $check_run_url;
        $this->completed_at = $completed_at;
        $this->conclusion = $conclusion;
        $this->head_sha = $head_sha;
        $this->html_url = $html_url;
        $this->id = $id;
        $this->labels = $labels;
        $this->name = $name;
        $this->node_id = $node_id;
        $this->run_attempt = $run_attempt;
        $this->run_id = $run_id;
        $this->run_url = $run_url;
        $this->runner_group_id = $runner_group_id;
        $this->runner_group_name = $runner_group_name;
        $this->runner_id = $runner_id;
        $this->runner_name = $runner_name;
        $this->started_at = $started_at;
        $this->head_branch = $head_branch;
        $this->workflow_name = $workflow_name;
        $this->status = $status;
        $this->steps = $steps;
        $this->url = $url;
    }
}
