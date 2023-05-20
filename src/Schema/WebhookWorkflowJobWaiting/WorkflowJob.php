<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\WebhookWorkflowJobWaiting;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class WorkflowJob
{
    public const SCHEMA_JSON         = '{"required":["id","run_id","run_url","run_attempt","node_id","head_sha","url","html_url","status","conclusion","started_at","completed_at","name","steps","check_run_url","labels","runner_id","runner_name","runner_group_id","runner_group_name","workflow_name","head_branch","created_at"],"type":"object","properties":{"check_run_url":{"type":"string","format":"uri"},"completed_at":{"type":["string","null"]},"conclusion":{"type":["string","null"]},"created_at":{"type":"string","description":"The time that the job created."},"head_sha":{"type":"string"},"html_url":{"type":"string","format":"uri"},"id":{"type":"integer"},"labels":{"type":"array","items":{"type":"string"}},"name":{"type":"string"},"node_id":{"type":"string"},"run_attempt":{"type":"integer"},"run_id":{"type":"number"},"run_url":{"type":"string","format":"uri"},"runner_group_id":{"type":["integer","null"]},"runner_group_name":{"type":["string","null"]},"runner_id":{"type":["integer","null"]},"runner_name":{"type":["string","null"]},"started_at":{"type":"string","format":"date-time"},"head_branch":{"type":["string","null"],"description":"The name of the current branch."},"workflow_name":{"type":["string","null"],"description":"The name of the workflow."},"status":{"enum":["queued","in_progress","completed","waiting"],"type":"string"},"steps":{"type":"array","items":{"title":"Workflow Step","required":["name","status","conclusion","number","started_at","completed_at"],"type":"object","properties":{"completed_at":{"type":["string","null"]},"conclusion":{"enum":["failure","skipped","success","cancelled",null],"type":["string","null"]},"name":{"type":"string"},"number":{"type":"integer"},"started_at":{"type":["string","null"]},"status":{"enum":["completed","in_progress","queued","pending","waiting"],"type":"string"}}}},"url":{"type":"string","format":"uri"}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"check_run_url":"https:\\/\\/example.com\\/","completed_at":"generated","conclusion":"generated","created_at":"generated","head_sha":"generated","html_url":"https:\\/\\/example.com\\/","id":2,"labels":["generated","generated"],"name":"generated","node_id":"generated","run_attempt":11,"run_id":0.6,"run_url":"https:\\/\\/example.com\\/","runner_group_id":15,"runner_group_name":"generated","runner_id":9,"runner_name":"generated","started_at":"1970-01-01T00:00:00+00:00","head_branch":"generated","workflow_name":"generated","status":"waiting","steps":[{"completed_at":"generated","conclusion":"cancelled","name":"generated","number":6,"started_at":"generated","status":"waiting"},{"completed_at":"generated","conclusion":"cancelled","name":"generated","number":6,"started_at":"generated","status":"waiting"}],"url":"https:\\/\\/example.com\\/"}';

    /**
     * createdAt: The time that the job created.
     * headBranch: The name of the current branch.
     * workflowName: The name of the workflow.
     */
    public function __construct(#[MapFrom('check_run_url')] public string $checkRunUrl, #[MapFrom('completed_at')] public ?string $completedAt, public ?string $conclusion, #[MapFrom('created_at')] public string $createdAt, #[MapFrom('head_sha')] public string $headSha, #[MapFrom('html_url')] public string $htmlUrl, public int $id, public array $labels, public string $name, #[MapFrom('node_id')] public string $nodeId, #[MapFrom('run_attempt')] public int $runAttempt, #[MapFrom('run_id')] public int|float $runId, #[MapFrom('run_url')] public string $runUrl, #[MapFrom('runner_group_id')] public ?int $runnerGroupId, #[MapFrom('runner_group_name')] public ?string $runnerGroupName, #[MapFrom('runner_id')] public ?int $runnerId, #[MapFrom('runner_name')] public ?string $runnerName, #[MapFrom('started_at')] public string $startedAt, #[MapFrom('head_branch')] public ?string $headBranch, #[MapFrom('workflow_name')] public ?string $workflowName, public string $status, public array $steps, public string $url)
    {
    }
}
