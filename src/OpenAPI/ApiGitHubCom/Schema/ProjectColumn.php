<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class ProjectColumn
{
    public const SCHEMA_JSON = '{"title":"Project Column","required":["id","node_id","url","project_url","cards_url","name","created_at","updated_at"],"type":"object","properties":{"url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/projects\\/columns\\/367"]},"project_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/projects\\/120"]},"cards_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/projects\\/columns\\/367\\/cards"]},"id":{"type":"integer","description":"The unique identifier of the project column","examples":[42]},"node_id":{"type":"string","examples":["MDEzOlByb2plY3RDb2x1bW4zNjc="]},"name":{"type":"string","description":"Name of the project column","examples":["Remaining tasks"]},"created_at":{"type":"string","format":"date-time","examples":["2016-09-05T14:18:44Z"]},"updated_at":{"type":"string","format":"date-time","examples":["2016-09-05T14:22:28Z"]}},"description":"Project columns contain cards of work."}';
    public const SCHEMA_EXAMPLE = '{"url":"https:\\/\\/api.github.com\\/projects\\/columns\\/367","project_url":"https:\\/\\/api.github.com\\/projects\\/120","cards_url":"https:\\/\\/api.github.com\\/projects\\/columns\\/367\\/cards","id":42,"node_id":"MDEzOlByb2plY3RDb2x1bW4zNjc=","name":"Remaining tasks","created_at":"2016-09-05T14:18:44Z","updated_at":"2016-09-05T14:22:28Z"}';
    public const SCHEMA_TITLE = 'Project Column';
    public const SCHEMA_DESCRIPTION = 'Project columns contain cards of work.';
    public readonly string $url;
    public readonly string $project_url;
    public readonly string $cards_url;
    /**
     * The unique identifier of the project column
     */
    public readonly int $id;
    public readonly string $node_id;
    /**
     * Name of the project column
     */
    public readonly string $name;
    public readonly string $created_at;
    public readonly string $updated_at;
    public function __construct(string $url, string $project_url, string $cards_url, int $id, string $node_id, string $name, string $created_at, string $updated_at)
    {
        $this->url = $url;
        $this->project_url = $project_url;
        $this->cards_url = $cards_url;
        $this->id = $id;
        $this->node_id = $node_id;
        $this->name = $name;
        $this->created_at = $created_at;
        $this->updated_at = $updated_at;
    }
}
