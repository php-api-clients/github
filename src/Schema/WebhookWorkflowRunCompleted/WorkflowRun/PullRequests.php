<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\WebhookWorkflowRunCompleted\WorkflowRun;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class PullRequests
{
    public const SCHEMA_JSON = '{"required":["url","id","number","head","base"],"type":"object","properties":{"base":{"required":["ref","sha","repo"],"type":"object","properties":{"ref":{"type":"string"},"repo":{"title":"Repo Ref","required":["id","url","name"],"type":"object","properties":{"id":{"type":"integer"},"name":{"type":"string"},"url":{"type":"string","format":"uri"}}},"sha":{"type":"string"}}},"head":{"required":["ref","sha","repo"],"type":"object","properties":{"ref":{"type":"string"},"repo":{"title":"Repo Ref","required":["id","url","name"],"type":"object","properties":{"id":{"type":"integer"},"name":{"type":"string"},"url":{"type":"string","format":"uri"}}},"sha":{"type":"string"}}},"id":{"type":"number"},"number":{"type":"number"},"url":{"type":"string","format":"uri"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"base":{"ref":"generated_ref","repo":{"id":13,"name":"generated_name","url":"generated_url"},"sha":"generated_sha"},"head":{"ref":"generated_ref","repo":{"id":13,"name":"generated_name","url":"generated_url"},"sha":"generated_sha"},"id":13,"number":13,"url":"generated_url"}';
    public function __construct(public ?Schema\WebhookCheckSuiteCompleted\CheckSuite\PullRequests\Base $base, public ?Schema\WebhookCheckSuiteCompleted\CheckSuite\PullRequests\Base $head, public ?int $id, public ?int $number, public ?string $url)
    {
    }
}
