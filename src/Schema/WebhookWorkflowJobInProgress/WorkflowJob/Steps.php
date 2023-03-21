<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\WebhookWorkflowJobInProgress\WorkflowJob;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class Steps
{
    public const SCHEMA_JSON = '{"title":"Workflow Step","required":["name","status","conclusion","number","started_at","completed_at"],"type":"object","properties":{"completed_at":{"type":["string","null"]},"conclusion":{"enum":["failure","skipped","success",null,"cancelled"],"type":["string","null"]},"name":{"type":"string"},"number":{"type":"integer"},"started_at":{"type":["string","null"]},"status":{"enum":["in_progress","completed","queued","pending"],"type":"string"}}}';
    public const SCHEMA_TITLE = 'Workflow Step';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"completed_at":"generated_completed_at_null","conclusion":"failure","name":"generated_name_null","number":13,"started_at":"generated_started_at_null","status":"in_progress"}';
    public function __construct(public ?string $completed_at, public ?string $conclusion, public string $name, public int $number, public ?string $started_at, public string $status)
    {
    }
}
