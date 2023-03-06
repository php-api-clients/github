<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\WebhookWorkflowRunCompleted\WorkflowRun\HeadCommit;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class Author
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"email":{"type":"string"},"name":{"type":"string"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"email":"generated_email","name":"generated_name"}';
    public function __construct(public ?string $email, public ?string $name)
    {
    }
}
