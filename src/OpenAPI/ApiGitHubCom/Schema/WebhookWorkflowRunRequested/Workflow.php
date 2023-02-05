<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WebhookWorkflowRunRequested;

final class Workflow
{
    public const SCHEMA_JSON = '{"title":"Workflow","required":["badge_url","created_at","html_url","id","name","node_id","path","state","updated_at","url"],"type":["object","null"],"properties":{"badge_url":{"type":"string","format":"uri"},"created_at":{"type":"string","format":"date-time"},"html_url":{"type":"string","format":"uri"},"id":{"type":"integer"},"name":{"type":"string"},"node_id":{"type":"string"},"path":{"type":"string"},"state":{"type":"string"},"updated_at":{"type":"string","format":"date-time"},"url":{"type":"string","format":"uri"}}}';
    public const SCHEMA_TITLE = 'Workflow';
    public const SCHEMA_DESCRIPTION = '';
    public readonly string $badge_url;
    public readonly string $created_at;
    public readonly string $html_url;
    public readonly int $id;
    public readonly string $name;
    public readonly string $node_id;
    public readonly string $path;
    public readonly string $state;
    public readonly string $updated_at;
    public readonly string $url;
    public function __construct(string $badge_url, string $created_at, string $html_url, int $id, string $name, string $node_id, string $path, string $state, string $updated_at, string $url)
    {
        $this->badge_url = $badge_url;
        $this->created_at = $created_at;
        $this->html_url = $html_url;
        $this->id = $id;
        $this->name = $name;
        $this->node_id = $node_id;
        $this->path = $path;
        $this->state = $state;
        $this->updated_at = $updated_at;
        $this->url = $url;
    }
}
