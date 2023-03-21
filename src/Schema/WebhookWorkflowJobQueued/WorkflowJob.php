<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\WebhookWorkflowJobQueued;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class WorkflowJob
{
    public const SCHEMA_JSON = '{"required":["id","run_id","run_url","run_attempt","node_id","head_sha","url","html_url","status","conclusion","started_at","completed_at","name","steps","check_run_url","labels","runner_id","runner_name","runner_group_id","runner_group_name","workflow_name","head_branch","created_at"],"type":"object","properties":{"check_run_url":{"type":"string","format":"uri"},"completed_at":{"type":["string","null"]},"conclusion":{"type":["string","null"]},"created_at":{"type":"string","description":"The time that the job created."},"head_sha":{"type":"string"},"html_url":{"type":"string","format":"uri"},"id":{"type":"integer"},"labels":{"type":"array","items":{"type":"string"}},"name":{"type":"string"},"node_id":{"type":"string"},"run_attempt":{"type":"integer"},"run_id":{"type":"number"},"run_url":{"type":"string","format":"uri"},"runner_group_id":{"type":["integer","null"]},"runner_group_name":{"type":["string","null"]},"runner_id":{"type":["integer","null"]},"runner_name":{"type":["string","null"]},"started_at":{"type":"string","format":"date-time"},"status":{"enum":["queued","in_progress","completed","waiting"],"type":"string"},"head_branch":{"type":["string","null"],"description":"The name of the current branch."},"workflow_name":{"type":["string","null"],"description":"The name of the workflow."},"steps":{"type":"array","items":{"title":"Workflow Step","required":["name","status","conclusion","number","started_at","completed_at"],"type":"object","properties":{"completed_at":{"type":["string","null"]},"conclusion":{"enum":["failure","skipped","success","cancelled",null],"type":["string","null"]},"name":{"type":"string"},"number":{"type":"integer"},"started_at":{"type":["string","null"]},"status":{"enum":["completed","in_progress","queued","pending"],"type":"string"}}}},"url":{"type":"string","format":"uri"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"check_run_url":"https:\\/\\/example.com\\/","completed_at":"generated_completed_at_null","conclusion":"generated_conclusion_null","created_at":"generated_created_at_null","head_sha":"generated_head_sha_null","html_url":"https:\\/\\/example.com\\/","id":13,"labels":["generated_labels_null"],"name":"generated_name_null","node_id":"generated_node_id_null","run_attempt":13,"run_id":13,"run_url":"https:\\/\\/example.com\\/","runner_group_id":13,"runner_group_name":"generated_runner_group_name_null","runner_id":13,"runner_name":"generated_runner_name_null","started_at":"1970-01-01T00:00:00+00:00","status":"queued","head_branch":"generated_head_branch_null","workflow_name":"generated_workflow_name_null","steps":[{"completed_at":"generated_completed_at_null","conclusion":"failure","name":"generated_name_null","number":13,"started_at":"generated_started_at_null","status":"completed"}],"url":"https:\\/\\/example.com\\/"}';
    /**
     * created_at: The time that the job created.
     * @param array<string> $labels
     * head_branch: The name of the current branch.
     * workflow_name: The name of the workflow.
     * @param array<\ApiClients\Client\GitHub\Schema\WebhookWorkflowJobQueued\WorkflowJob\Steps> $steps
     */
    public function __construct(public string $check_run_url, public ?string $completed_at, public ?string $conclusion, public string $created_at, public string $head_sha, public string $html_url, public int $id, public array $labels, public string $name, public string $node_id, public int $run_attempt, public int $run_id, public string $run_url, public ?int $runner_group_id, public ?string $runner_group_name, public ?int $runner_id, public ?string $runner_name, public string $started_at, public string $status, public ?string $head_branch, public ?string $workflow_name, #[\EventSauce\ObjectHydrator\PropertyCasters\CastListToType(Schema\WebhookWorkflowJobQueued\WorkflowJob\Steps::class)] public array $steps, public string $url)
    {
    }
}
