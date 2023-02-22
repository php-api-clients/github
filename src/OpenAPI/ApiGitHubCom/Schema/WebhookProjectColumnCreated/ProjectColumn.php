<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WebhookProjectColumnCreated;

final readonly class ProjectColumn
{
    public const SCHEMA_JSON = '{"title":"Project Column","required":["url","project_url","cards_url","id","node_id","name","created_at","updated_at"],"type":"object","properties":{"after_id":{"type":["integer","null"]},"cards_url":{"type":"string","format":"uri"},"created_at":{"type":"string","format":"date-time"},"id":{"type":"integer","description":"The unique identifier of the project column"},"name":{"type":"string","description":"Name of the project column"},"node_id":{"type":"string"},"project_url":{"type":"string","format":"uri"},"updated_at":{"type":"string","format":"date-time"},"url":{"type":"string","format":"uri"}}}';
    public const SCHEMA_TITLE = 'Project Column';
    public const SCHEMA_DESCRIPTION = '';
    public ?int $after_id;
    public ?string $cards_url;
    public ?string $created_at;
    /**
     * The unique identifier of the project column
     */
    public ?int $id;
    /**
     * Name of the project column
     */
    public ?string $name;
    public ?string $node_id;
    public ?string $project_url;
    public ?string $updated_at;
    public ?string $url;
    public function __construct(int $after_id, string $cards_url, string $created_at, int $id, string $name, string $node_id, string $project_url, string $updated_at, string $url)
    {
        $this->after_id = $after_id;
        $this->cards_url = $cards_url;
        $this->created_at = $created_at;
        $this->id = $id;
        $this->name = $name;
        $this->node_id = $node_id;
        $this->project_url = $project_url;
        $this->updated_at = $updated_at;
        $this->url = $url;
    }
}
