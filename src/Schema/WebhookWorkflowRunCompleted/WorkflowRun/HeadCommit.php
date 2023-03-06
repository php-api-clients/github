<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\WebhookWorkflowRunCompleted\WorkflowRun;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class HeadCommit
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"author":{"type":"object","properties":{"email":{"type":"string"},"name":{"type":"string"}}},"committer":{"type":"object","properties":{"email":{"type":"string"},"name":{"type":"string"}}},"id":{"type":"string"},"message":{"type":"string"},"timestamp":{"type":"string"},"tree_id":{"type":"string"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"author":{"email":"generated_email","name":"generated_name"},"committer":{"email":"generated_email","name":"generated_name"},"id":"generated_id","message":"generated_message","timestamp":"generated_timestamp","tree_id":"generated_tree_id"}';
    public function __construct(public ?Schema\WebhookWorkflowRunCompleted\WorkflowRun\HeadCommit\Author $author, public ?Schema\WebhookWorkflowRunCompleted\WorkflowRun\HeadCommit\Author $committer, public ?string $id, public ?string $message, public ?string $timestamp, public ?string $tree_id)
    {
    }
}
