<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WebhookProjectCardMoved;

final class ProjectCard
{
    public const SCHEMA_JSON = '{"title":"Project Card","required":["url","project_url","column_url","column_id","id","node_id","note","archived","creator","created_at","updated_at"],"type":"object","properties":{"after_id":{"type":["integer","null"]},"archived":{"type":"boolean","description":"Whether or not the card is archived"},"column_id":{"type":"integer"},"column_url":{"type":"string","format":"uri"},"content_url":{"type":"string","format":"uri"},"created_at":{"type":"string","format":"date-time"},"creator":{"title":"User","required":["login","id"],"type":["object","null"],"properties":{"avatar_url":{"type":"string","format":"uri"},"deleted":{"type":"boolean"},"email":{"type":["string","null"]},"events_url":{"type":"string","format":"uri-template"},"followers_url":{"type":"string","format":"uri"},"following_url":{"type":"string","format":"uri-template"},"gists_url":{"type":"string","format":"uri-template"},"gravatar_id":{"type":"string"},"html_url":{"type":"string","format":"uri"},"id":{"type":"integer"},"login":{"type":"string"},"name":{"type":"string"},"node_id":{"type":"string"},"organizations_url":{"type":"string","format":"uri"},"received_events_url":{"type":"string","format":"uri"},"repos_url":{"type":"string","format":"uri"},"site_admin":{"type":"boolean"},"starred_url":{"type":"string","format":"uri-template"},"subscriptions_url":{"type":"string","format":"uri"},"type":{"enum":["Bot","User","Organization","Mannequin"],"type":"string"},"url":{"type":"string","format":"uri"}}},"id":{"type":"integer","description":"The project card\'s ID"},"node_id":{"type":"string"},"note":{"type":["string","null"]},"project_url":{"type":"string","format":"uri"},"updated_at":{"type":"string","format":"date-time"},"url":{"type":"string","format":"uri"}}}';
    public const SCHEMA_TITLE = 'Project Card';
    public const SCHEMA_DESCRIPTION = '';
    private $after_id;
    /**
     * Whether or not the card is archived
     */
    private bool $archived;
    private int $column_id;
    private string $column_url;
    private ?string $content_url = null;
    private string $created_at;
    private $creator;
    /**
     * The project card's ID
     */
    private int $id;
    private string $node_id;
    private $note;
    private string $project_url;
    private string $updated_at;
    private string $url;
    public function after_id()
    {
        return $this->after_id;
    }
    /**
     * Whether or not the card is archived
     */
    public function archived() : bool
    {
        return $this->archived;
    }
    public function column_id() : int
    {
        return $this->column_id;
    }
    public function column_url() : string
    {
        return $this->column_url;
    }
    public function content_url() : ?string
    {
        return $this->content_url;
    }
    public function created_at() : string
    {
        return $this->created_at;
    }
    public function creator()
    {
        return $this->creator;
    }
    /**
     * The project card's ID
     */
    public function id() : int
    {
        return $this->id;
    }
    public function node_id() : string
    {
        return $this->node_id;
    }
    public function note()
    {
        return $this->note;
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
