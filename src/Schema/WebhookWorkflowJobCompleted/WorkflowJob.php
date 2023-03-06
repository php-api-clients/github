<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\WebhookWorkflowJobCompleted;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class WorkflowJob
{
    public const SCHEMA_JSON = '{"required":["conclusion"],"type":"object","properties":{"check_run_url":{"type":"string"},"completed_at":{"type":"string"},"conclusion":{"enum":["success","failure","skipped","cancelled","action_required","neutral","timed_out"],"type":"string"},"created_at":{"type":"string","description":"The time that the job created."},"head_sha":{"type":"string"},"html_url":{"type":"string"},"id":{"type":"integer"},"labels":{"type":"array","items":{"type":["string","null"]}},"name":{"type":"string"},"node_id":{"type":"string"},"run_attempt":{"type":"integer"},"run_id":{"type":"integer"},"run_url":{"type":"string"},"runner_group_id":{"type":["number","null"]},"runner_group_name":{"type":["string","null"]},"runner_id":{"type":["number","null"]},"runner_name":{"type":["string","null"]},"started_at":{"type":"string"},"status":{"type":"string"},"head_branch":{"type":["string","null"],"description":"The name of the current branch."},"workflow_name":{"type":["string","null"],"description":"The name of the workflow."},"steps":{"type":"array","items":{"type":["object","null"]}},"url":{"type":"string"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"check_run_url":"generated_check_run_url","completed_at":"generated_completed_at","conclusion":"generated_conclusion","created_at":"generated_created_at","head_sha":"generated_head_sha","html_url":"generated_html_url","id":13,"labels":["generated_labels"],"name":"generated_name","node_id":"generated_node_id","run_attempt":13,"run_id":13,"run_url":"generated_run_url","runner_group_id":13,"runner_group_name":"generated_runner_group_name","runner_id":13,"runner_name":"generated_runner_name","started_at":"generated_started_at","status":"generated_status","head_branch":"generated_head_branch","workflow_name":"generated_workflow_name","steps":null,"url":"generated_url"}';
    /**
     * created_at: The time that the job created.
     * @param array<string> $labels
     * head_branch: The name of the current branch.
     * workflow_name: The name of the workflow.
     */
    public function __construct(public string $check_run_url, public string $completed_at, public ?string $conclusion, public string $created_at, public string $head_sha, public string $html_url, public int $id, public array $labels, public string $name, public string $node_id, public int $run_attempt, public int $run_id, public string $run_url, public ?int $runner_group_id, public ?string $runner_group_name, public ?int $runner_id, public ?string $runner_name, public string $started_at, public string $status, public ?string $head_branch, public ?string $workflow_name, public mixed $steps, public string $url)
    {
    }
}
