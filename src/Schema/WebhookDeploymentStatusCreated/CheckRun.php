<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema\WebhookDeploymentStatusCreated;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
final readonly class CheckRun
{
    public const SCHEMA_JSON = '{"required":["id","name","node_id","head_sha","external_id","url","html_url","details_url","status","conclusion","started_at","completed_at"],"type":["object","null"],"properties":{"completed_at":{"type":["string","null"],"format":"date-time"},"conclusion":{"enum":["success","failure","neutral","cancelled","timed_out","action_required","stale","skipped",null],"type":["string","null"],"description":"The result of the completed check run. Can be one of `success`, `failure`, `neutral`, `cancelled`, `timed_out`, `action_required` or `stale`. This value will be `null` until the check run has completed."},"details_url":{"type":"string","format":"uri"},"external_id":{"type":"string"},"head_sha":{"type":"string","description":"The SHA of the commit that is being checked."},"html_url":{"type":"string","format":"uri"},"id":{"type":"integer","description":"The id of the check."},"name":{"type":"string","description":"The name of the check run."},"node_id":{"type":"string"},"started_at":{"type":"string","format":"date-time"},"status":{"enum":["queued","in_progress","completed","waiting","pending"],"type":"string","description":"The current status of the check run. Can be `queued`, `in_progress`, or `completed`."},"url":{"type":"string","format":"uri"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"completed_at":"1970-01-01T00:00:00+00:00","conclusion":"success","details_url":"https:\\/\\/example.com\\/","external_id":"generated_external_id_null","head_sha":"generated_head_sha_null","html_url":"https:\\/\\/example.com\\/","id":13,"name":"generated_name_null","node_id":"generated_node_id_null","started_at":"1970-01-01T00:00:00+00:00","status":"queued","url":"https:\\/\\/example.com\\/"}';
    /**
     * conclusion: The result of the completed check run. Can be one of `success`, `failure`, `neutral`, `cancelled`, `timed_out`, `action_required` or `stale`. This value will be `null` until the check run has completed.
     * headSha: The SHA of the commit that is being checked.
     * id: The id of the check.
     * name: The name of the check run.
     * status: The current status of the check run. Can be `queued`, `in_progress`, or `completed`.
     */
    public function __construct(#[\EventSauce\ObjectHydrator\MapFrom('completed_at')] public ?string $completedAt, public ?string $conclusion, #[\EventSauce\ObjectHydrator\MapFrom('details_url')] public string $detailsUrl, #[\EventSauce\ObjectHydrator\MapFrom('external_id')] public string $externalId, #[\EventSauce\ObjectHydrator\MapFrom('head_sha')] public string $headSha, #[\EventSauce\ObjectHydrator\MapFrom('html_url')] public string $htmlUrl, public int $id, public string $name, #[\EventSauce\ObjectHydrator\MapFrom('node_id')] public string $nodeId, #[\EventSauce\ObjectHydrator\MapFrom('started_at')] public string $startedAt, public string $status, public string $url)
    {
    }
}
