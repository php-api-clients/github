<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema;

final class ProjectColumn
{
    public const SCHEMA_JSON = '{"title":"Project Column","required":["id","node_id","url","project_url","cards_url","name","created_at","updated_at"],"type":"object","properties":{"url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/projects\\/columns\\/367"]},"project_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/projects\\/120"]},"cards_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/projects\\/columns\\/367\\/cards"]},"id":{"type":"integer","description":"The unique identifier of the project column","examples":[42]},"node_id":{"type":"string","examples":["MDEzOlByb2plY3RDb2x1bW4zNjc="]},"name":{"type":"string","description":"Name of the project column","examples":["Remaining tasks"]},"created_at":{"type":"string","format":"date-time","examples":["2016-09-05T14:18:44Z"]},"updated_at":{"type":"string","format":"date-time","examples":["2016-09-05T14:22:28Z"]}},"description":"Project columns contain cards of work."}';
    public const SCHEMA_TITLE = 'Project Column';
    public const SCHEMA_DESCRIPTION = 'Project columns contain cards of work.';
    private string $url;
    private string $project_url;
    private string $cards_url;
    /**
     * The unique identifier of the project column
     */
    private int $id;
    private string $node_id;
    /**
     * Name of the project column
     */
    private string $name;
    private string $created_at;
    private string $updated_at;
    public function url() : string
    {
        return $this->url;
    }
    public function project_url() : string
    {
        return $this->project_url;
    }
    public function cards_url() : string
    {
        return $this->cards_url;
    }
    /**
     * The unique identifier of the project column
     */
    public function id() : int
    {
        return $this->id;
    }
    public function node_id() : string
    {
        return $this->node_id;
    }
    /**
     * Name of the project column
     */
    public function name() : string
    {
        return $this->name;
    }
    public function created_at() : string
    {
        return $this->created_at;
    }
    public function updated_at() : string
    {
        return $this->updated_at;
    }
}
