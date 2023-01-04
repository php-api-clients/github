<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WebhookDeploymentStatusCreated;

final class CheckRun
{
    public const SCHEMA_JSON = '{"required":["id","name","node_id","head_sha","external_id","url","html_url","details_url","status","conclusion","started_at","completed_at"],"type":["object","null"],"properties":{"completed_at":{"type":["string","null"],"format":"date-time"},"conclusion":{"enum":["success","failure","neutral","cancelled","timed_out","action_required","stale","skipped",null],"type":["string","null"],"description":"The result of the completed check run. Can be one of `success`, `failure`, `neutral`, `cancelled`, `timed_out`, `action_required` or `stale`. This value will be `null` until the check run has completed."},"details_url":{"type":"string","format":"uri"},"external_id":{"type":"string"},"head_sha":{"type":"string","description":"The SHA of the commit that is being checked."},"html_url":{"type":"string","format":"uri"},"id":{"type":"integer","description":"The id of the check."},"name":{"type":"string","description":"The name of the check run."},"node_id":{"type":"string"},"started_at":{"type":"string","format":"date-time"},"status":{"enum":["queued","in_progress","completed","waiting","pending"],"type":"string","description":"The current status of the check run. Can be `queued`, `in_progress`, or `completed`."},"url":{"type":"string","format":"uri"}}}';
    public const SCHEMA_TITLE = 'WebhookDeploymentStatusCreated\\CheckRun';
    public const SCHEMA_DESCRIPTION = '';
    private ?string $completed_at;
    /**
     * The result of the completed check run. Can be one of `success`, `failure`, `neutral`, `cancelled`, `timed_out`, `action_required` or `stale`. This value will be `null` until the check run has completed.
     */
    private ?string $conclusion;
    private string $details_url;
    private string $external_id;
    /**
     * The SHA of the commit that is being checked.
     */
    private string $head_sha;
    private string $html_url;
    /**
     * The id of the check.
     */
    private int $id;
    /**
     * The name of the check run.
     */
    private string $name;
    private string $node_id;
    private string $started_at;
    /**
     * The current status of the check run. Can be `queued`, `in_progress`, or `completed`.
     */
    private string $status;
    private string $url;
    public function completed_at() : ?string
    {
        return $this->completed_at;
    }
    /**
     * The result of the completed check run. Can be one of `success`, `failure`, `neutral`, `cancelled`, `timed_out`, `action_required` or `stale`. This value will be `null` until the check run has completed.
     */
    public function conclusion() : ?string
    {
        return $this->conclusion;
    }
    public function details_url() : string
    {
        return $this->details_url;
    }
    public function external_id() : string
    {
        return $this->external_id;
    }
    /**
     * The SHA of the commit that is being checked.
     */
    public function head_sha() : string
    {
        return $this->head_sha;
    }
    public function html_url() : string
    {
        return $this->html_url;
    }
    /**
     * The id of the check.
     */
    public function id() : int
    {
        return $this->id;
    }
    /**
     * The name of the check run.
     */
    public function name() : string
    {
        return $this->name;
    }
    public function node_id() : string
    {
        return $this->node_id;
    }
    public function started_at() : string
    {
        return $this->started_at;
    }
    /**
     * The current status of the check run. Can be `queued`, `in_progress`, or `completed`.
     */
    public function status() : string
    {
        return $this->status;
    }
    public function url() : string
    {
        return $this->url;
    }
}
