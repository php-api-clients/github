<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WebhookProjectColumnDeleted;

final class ProjectColumn
{
    public const SCHEMA_JSON = '{"title":"Project Column","required":["url","project_url","cards_url","id","node_id","name","created_at","updated_at"],"type":"object","properties":{"after_id":{"type":["integer","null"]},"cards_url":{"type":"string","format":"uri"},"created_at":{"type":"string","format":"date-time"},"id":{"type":"integer","description":"The unique identifier of the project column"},"name":{"type":"string","description":"Name of the project column"},"node_id":{"type":"string"},"project_url":{"type":"string","format":"uri"},"updated_at":{"type":"string","format":"date-time"},"url":{"type":"string","format":"uri"}}}';
    public const SCHEMA_TITLE = 'Project Column';
    public const SCHEMA_DESCRIPTION = '';
    private ?int $after_id = null;
    private string $cards_url;
    private string $created_at;
    /**
     * The unique identifier of the project column
     */
    private int $id;
    /**
     * Name of the project column
     */
    private string $name;
    private string $node_id;
    private string $project_url;
    private string $updated_at;
    private string $url;
    public function after_id() : ?int
    {
        return $this->after_id;
    }
    public function cards_url() : string
    {
        return $this->cards_url;
    }
    public function created_at() : string
    {
        return $this->created_at;
    }
    /**
     * The unique identifier of the project column
     */
    public function id() : int
    {
        return $this->id;
    }
    /**
     * Name of the project column
     */
    public function name() : string
    {
        return $this->name;
    }
    public function node_id() : string
    {
        return $this->node_id;
    }
    public function project_url() : string
    {
        return $this->project_url;
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
