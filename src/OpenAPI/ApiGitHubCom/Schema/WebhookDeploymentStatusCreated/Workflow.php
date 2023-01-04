<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WebhookDeploymentStatusCreated;

final class Workflow
{
    public const SCHEMA_JSON = '{"title":"Workflow","required":["badge_url","created_at","html_url","id","name","node_id","path","state","updated_at","url"],"type":["object","null"],"properties":{"badge_url":{"type":"string","format":"uri"},"created_at":{"type":"string","format":"date-time"},"html_url":{"type":"string","format":"uri"},"id":{"type":"integer"},"name":{"type":"string"},"node_id":{"type":"string"},"path":{"type":"string"},"state":{"type":"string"},"updated_at":{"type":"string","format":"date-time"},"url":{"type":"string","format":"uri"}}}';
    public const SCHEMA_TITLE = 'Workflow';
    public const SCHEMA_DESCRIPTION = '';
    private string $badge_url;
    private string $created_at;
    private string $html_url;
    private int $id;
    private string $name;
    private string $node_id;
    private string $path;
    private string $state;
    private string $updated_at;
    private string $url;
    public function badge_url() : string
    {
        return $this->badge_url;
    }
    public function created_at() : string
    {
        return $this->created_at;
    }
    public function html_url() : string
    {
        return $this->html_url;
    }
    public function id() : int
    {
        return $this->id;
    }
    public function name() : string
    {
        return $this->name;
    }
    public function node_id() : string
    {
        return $this->node_id;
    }
    public function path() : string
    {
        return $this->path;
    }
    public function state() : string
    {
        return $this->state;
    }
    public function updated_at() : string
    {
        return $this->updated_at;
    }
    public function url() : string
    {
        return $this->url;
    }
}
