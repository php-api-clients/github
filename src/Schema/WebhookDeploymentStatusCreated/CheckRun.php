<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\WebhookDeploymentStatusCreated;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class CheckRun
{
    public const SCHEMA_JSON = '{"required":["id","name","node_id","head_sha","external_id","url","html_url","details_url","status","conclusion","started_at","completed_at"],"type":["object","null"],"properties":{"completed_at":{"type":["string","null"],"format":"date-time"},"conclusion":{"enum":["success","failure","neutral","cancelled","timed_out","action_required","stale","skipped",null],"type":["string","null"],"description":"The result of the completed check run. Can be one of `success`, `failure`, `neutral`, `cancelled`, `timed_out`, `action_required` or `stale`. This value will be `null` until the check run has completed."},"details_url":{"type":"string","format":"uri"},"external_id":{"type":"string"},"head_sha":{"type":"string","description":"The SHA of the commit that is being checked."},"html_url":{"type":"string","format":"uri"},"id":{"type":"integer","description":"The id of the check."},"name":{"type":"string","description":"The name of the check run."},"node_id":{"type":"string"},"started_at":{"type":"string","format":"date-time"},"status":{"enum":["queued","in_progress","completed","waiting","pending"],"type":"string","description":"The current status of the check run. Can be `queued`, `in_progress`, or `completed`."},"url":{"type":"string","format":"uri"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"completed_at":"generated_completed_at","conclusion":"generated_conclusion","details_url":"generated_details_url","external_id":"generated_external_id","head_sha":"generated_head_sha","html_url":"generated_html_url","id":13,"name":"generated_name","node_id":"generated_node_id","started_at":"generated_started_at","status":"generated_status","url":"generated_url"}';
    /**
     * conclusion: The result of the completed check run. Can be one of `success`, `failure`, `neutral`, `cancelled`, `timed_out`, `action_required` or `stale`. This value will be `null` until the check run has completed.
     * head_sha: The SHA of the commit that is being checked.
     * id: The id of the check.
     * name: The name of the check run.
     * status: The current status of the check run. Can be `queued`, `in_progress`, or `completed`.
     */
    public function __construct(public ?string $completed_at, public ?string $conclusion, public string $details_url, public string $external_id, public string $head_sha, public string $html_url, public int $id, public string $name, public string $node_id, public string $started_at, public string $status, public string $url)
    {
    }
}
