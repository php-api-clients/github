<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema;

final readonly class ProjectColumn
{
    public const SCHEMA_JSON = '{"title":"Project Column","required":["id","node_id","url","project_url","cards_url","name","created_at","updated_at"],"type":"object","properties":{"url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/projects\\/columns\\/367"]},"project_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/projects\\/120"]},"cards_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/projects\\/columns\\/367\\/cards"]},"id":{"type":"integer","description":"The unique identifier of the project column","examples":[42]},"node_id":{"type":"string","examples":["MDEzOlByb2plY3RDb2x1bW4zNjc="]},"name":{"type":"string","description":"Name of the project column","examples":["Remaining tasks"]},"created_at":{"type":"string","format":"date-time","examples":["2016-09-05T14:18:44Z"]},"updated_at":{"type":"string","format":"date-time","examples":["2016-09-05T14:22:28Z"]}},"description":"Project columns contain cards of work."}';
    public const SCHEMA_TITLE = 'Project Column';
    public const SCHEMA_DESCRIPTION = 'Project columns contain cards of work.';
    public ?string $url;
    public ?string $project_url;
    public ?string $cards_url;
    /**
     * The unique identifier of the project column
     */
    public ?int $id;
    public ?string $node_id;
    /**
     * Name of the project column
     */
    public ?string $name;
    public ?string $created_at;
    public ?string $updated_at;
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
