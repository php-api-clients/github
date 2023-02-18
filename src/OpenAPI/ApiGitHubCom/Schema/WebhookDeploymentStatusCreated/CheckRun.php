<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WebhookDeploymentStatusCreated;

final readonly class CheckRun
{
    public const SCHEMA_JSON        = '{"required":["id","name","node_id","head_sha","external_id","url","html_url","details_url","status","conclusion","started_at","completed_at"],"type":["object","null"],"properties":{"completed_at":{"type":["string","null"],"format":"date-time"},"conclusion":{"enum":["success","failure","neutral","cancelled","timed_out","action_required","stale","skipped",null],"type":["string","null"],"description":"The result of the completed check run. Can be one of `success`, `failure`, `neutral`, `cancelled`, `timed_out`, `action_required` or `stale`. This value will be `null` until the check run has completed."},"details_url":{"type":"string","format":"uri"},"external_id":{"type":"string"},"head_sha":{"type":"string","description":"The SHA of the commit that is being checked."},"html_url":{"type":"string","format":"uri"},"id":{"type":"integer","description":"The id of the check."},"name":{"type":"string","description":"The name of the check run."},"node_id":{"type":"string"},"started_at":{"type":"string","format":"date-time"},"status":{"enum":["queued","in_progress","completed","waiting","pending"],"type":"string","description":"The current status of the check run. Can be `queued`, `in_progress`, or `completed`."},"url":{"type":"string","format":"uri"}}}';
    public const SCHEMA_TITLE       = '';
    public const SCHEMA_DESCRIPTION = '';
    public ?string $completed_at;
    /**
     * The result of the completed check run. Can be one of `success`, `failure`, `neutral`, `cancelled`, `timed_out`, `action_required` or `stale`. This value will be `null` until the check run has completed.
     */
    public ?string $conclusion;
    public ?string $details_url;
    public ?string $external_id;
    /**
     * The SHA of the commit that is being checked.
     */
    public ?string $head_sha;
    public ?string $html_url;
    /**
     * The id of the check.
     */
    public ?int $id;
    /**
     * The name of the check run.
     */
    public ?string $name;
    public ?string $node_id;
    public ?string $started_at;
    /**
     * The current status of the check run. Can be `queued`, `in_progress`, or `completed`.
     */
    public ?string $status;
    public ?string $url;

    public function __construct(string $completed_at, string $conclusion, string $details_url, string $external_id, string $head_sha, string $html_url, int $id, string $name, string $node_id, string $started_at, string $status, string $url)
    {
        $this->completed_at = $completed_at;
        $this->conclusion   = $conclusion;
        $this->details_url  = $details_url;
        $this->external_id  = $external_id;
        $this->head_sha     = $head_sha;
        $this->html_url     = $html_url;
        $this->id           = $id;
        $this->name         = $name;
        $this->node_id      = $node_id;
        $this->started_at   = $started_at;
        $this->status       = $status;
        $this->url          = $url;
    }
}
