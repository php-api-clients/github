<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\WebhookWorkflowRunCompleted\WorkflowRun\PullRequests;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class Head
{
    public const SCHEMA_JSON = '{"required":["ref","sha","repo"],"type":"object","properties":{"ref":{"type":"string"},"repo":{"title":"Repo Ref","required":["id","url","name"],"type":"object","properties":{"id":{"type":"integer"},"name":{"type":"string"},"url":{"type":"string","format":"uri"}}},"sha":{"type":"string"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"ref":"generated_ref_null","repo":{"id":13,"name":"generated_name_null","url":"https:\\/\\/example.com\\/"},"sha":"generated_sha_null"}';
    public function __construct(public string $ref, public Schema\WebhookWorkflowRunCompleted\WorkflowRun\PullRequests\Head\Repo $repo, public string $sha)
    {
    }
}
