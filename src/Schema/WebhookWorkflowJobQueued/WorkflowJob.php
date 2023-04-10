<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema\WebhookWorkflowJobQueued;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
final readonly class WorkflowJob
{
    public const SCHEMA_JSON = '{"required":["id","run_id","run_url","run_attempt","node_id","head_sha","url","html_url","status","conclusion","started_at","completed_at","name","steps","check_run_url","labels","runner_id","runner_name","runner_group_id","runner_group_name","workflow_name","head_branch","created_at"],"type":"object","properties":{"check_run_url":{"type":"string","format":"uri"},"completed_at":{"type":["string","null"]},"conclusion":{"type":["string","null"]},"created_at":{"type":"string","description":"The time that the job created."},"head_sha":{"type":"string"},"html_url":{"type":"string","format":"uri"},"id":{"type":"integer"},"labels":{"type":"array","items":{"type":"string"}},"name":{"type":"string"},"node_id":{"type":"string"},"run_attempt":{"type":"integer"},"run_id":{"type":"number"},"run_url":{"type":"string","format":"uri"},"runner_group_id":{"type":["integer","null"]},"runner_group_name":{"type":["string","null"]},"runner_id":{"type":["integer","null"]},"runner_name":{"type":["string","null"]},"started_at":{"type":"string","format":"date-time"},"status":{"enum":["queued","in_progress","completed","waiting"],"type":"string"},"head_branch":{"type":["string","null"],"description":"The name of the current branch."},"workflow_name":{"type":["string","null"],"description":"The name of the workflow."},"steps":{"type":"array","items":{"title":"Workflow Step","required":["name","status","conclusion","number","started_at","completed_at"],"type":"object","properties":{"completed_at":{"type":["string","null"]},"conclusion":{"enum":["failure","skipped","success","cancelled",null],"type":["string","null"]},"name":{"type":"string"},"number":{"type":"integer"},"started_at":{"type":["string","null"]},"status":{"enum":["completed","in_progress","queued","pending"],"type":"string"}}}},"url":{"type":"string","format":"uri"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"check_run_url":"https:\\/\\/example.com\\/","completed_at":"generated_completed_at_null","conclusion":"generated_conclusion_null","created_at":"generated_created_at_null","head_sha":"generated_head_sha_null","html_url":"https:\\/\\/example.com\\/","id":13,"labels":["generated_labels_null"],"name":"generated_name_null","node_id":"generated_node_id_null","run_attempt":13,"run_id":13.13,"run_url":"https:\\/\\/example.com\\/","runner_group_id":13,"runner_group_name":"generated_runner_group_name_null","runner_id":13,"runner_name":"generated_runner_name_null","started_at":"1970-01-01T00:00:00+00:00","status":"queued","head_branch":"generated_head_branch_null","workflow_name":"generated_workflow_name_null","steps":[{"completed_at":"generated_completed_at_null","conclusion":"failure","name":"generated_name_null","number":13,"started_at":"generated_started_at_null","status":"completed"}],"url":"https:\\/\\/example.com\\/"}';
    /**
     * createdAt: The time that the job created.
     * @param array<string> $labels
     * headBranch: The name of the current branch.
     * workflowName: The name of the workflow.
     * @param array<\ApiClients\Client\Github\Schema\WebhookWorkflowJobQueued\WorkflowJob\Steps> $steps
     */
    public function __construct(#[\EventSauce\ObjectHydrator\MapFrom('check_run_url')] public string $checkRunUrl, #[\EventSauce\ObjectHydrator\MapFrom('completed_at')] public ?string $completedAt, public ?string $conclusion, #[\EventSauce\ObjectHydrator\MapFrom('created_at')] public string $createdAt, #[\EventSauce\ObjectHydrator\MapFrom('head_sha')] public string $headSha, #[\EventSauce\ObjectHydrator\MapFrom('html_url')] public string $htmlUrl, public int $id, public array $labels, public string $name, #[\EventSauce\ObjectHydrator\MapFrom('node_id')] public string $nodeId, #[\EventSauce\ObjectHydrator\MapFrom('run_attempt')] public int $runAttempt, #[\EventSauce\ObjectHydrator\MapFrom('run_id')] public float $runId, #[\EventSauce\ObjectHydrator\MapFrom('run_url')] public string $runUrl, #[\EventSauce\ObjectHydrator\MapFrom('runner_group_id')] public ?int $runnerGroupId, #[\EventSauce\ObjectHydrator\MapFrom('runner_group_name')] public ?string $runnerGroupName, #[\EventSauce\ObjectHydrator\MapFrom('runner_id')] public ?int $runnerId, #[\EventSauce\ObjectHydrator\MapFrom('runner_name')] public ?string $runnerName, #[\EventSauce\ObjectHydrator\MapFrom('started_at')] public string $startedAt, public string $status, #[\EventSauce\ObjectHydrator\MapFrom('head_branch')] public ?string $headBranch, #[\EventSauce\ObjectHydrator\MapFrom('workflow_name')] public ?string $workflowName, #[\EventSauce\ObjectHydrator\PropertyCasters\CastListToType(Schema\WebhookWorkflowJobQueued\WorkflowJob\Steps::class)] public array $steps, public string $url)
    {
    }
}
