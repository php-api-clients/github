<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WebhookProjectCardEdited;

final class ProjectCard
{
    public const SCHEMA_JSON = '{"title":"Project Card","required":["url","project_url","column_url","column_id","id","node_id","note","archived","creator","created_at","updated_at"],"type":"object","properties":{"after_id":{"type":["integer","null"]},"archived":{"type":"boolean","description":"Whether or not the card is archived"},"column_id":{"type":"integer"},"column_url":{"type":"string","format":"uri"},"content_url":{"type":"string","format":"uri"},"created_at":{"type":"string","format":"date-time"},"creator":{"title":"User","required":["login","id"],"type":["object","null"],"properties":{"avatar_url":{"type":"string","format":"uri"},"deleted":{"type":"boolean"},"email":{"type":["string","null"]},"events_url":{"type":"string","format":"uri-template"},"followers_url":{"type":"string","format":"uri"},"following_url":{"type":"string","format":"uri-template"},"gists_url":{"type":"string","format":"uri-template"},"gravatar_id":{"type":"string"},"html_url":{"type":"string","format":"uri"},"id":{"type":"integer"},"login":{"type":"string"},"name":{"type":"string"},"node_id":{"type":"string"},"organizations_url":{"type":"string","format":"uri"},"received_events_url":{"type":"string","format":"uri"},"repos_url":{"type":"string","format":"uri"},"site_admin":{"type":"boolean"},"starred_url":{"type":"string","format":"uri-template"},"subscriptions_url":{"type":"string","format":"uri"},"type":{"enum":["Bot","User","Organization"],"type":"string"},"url":{"type":"string","format":"uri"}}},"id":{"type":"integer","description":"The project card\'s ID"},"node_id":{"type":"string"},"note":{"type":["string","null"]},"project_url":{"type":"string","format":"uri"},"updated_at":{"type":"string","format":"date-time"},"url":{"type":"string","format":"uri"}}}';
    public const SCHEMA_TITLE = 'Project Card';
    public const SCHEMA_DESCRIPTION = '';
    public readonly ?int $after_id;
    /**
     * Whether or not the card is archived
     */
    public readonly bool $archived;
    public readonly int $column_id;
    public readonly string $column_url;
    public readonly ?string $content_url;
    public readonly string $created_at;
    public readonly ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ProjectCard\Creator $creator;
    /**
     * The project card's ID
     */
    public readonly int $id;
    public readonly string $node_id;
    public readonly ?string $note;
    public readonly string $project_url;
    public readonly string $updated_at;
    public readonly string $url;
    public function __construct(int $after_id, bool $archived, int $column_id, string $column_url, string $content_url, string $created_at, ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ProjectCard\Creator $creator, int $id, string $node_id, string $note, string $project_url, string $updated_at, string $url)
    {
        $this->after_id = $after_id;
        $this->archived = $archived;
        $this->column_id = $column_id;
        $this->column_url = $column_url;
        $this->content_url = $content_url;
        $this->created_at = $created_at;
        $this->creator = $creator;
        $this->id = $id;
        $this->node_id = $node_id;
        $this->note = $note;
        $this->project_url = $project_url;
        $this->updated_at = $updated_at;
        $this->url = $url;
    }
}
