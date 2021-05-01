<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class TeamDiscussion
{
    public const SCHEMA_TITLE = 'Team Discussion';
    public const SCHEMA_DESCRIPTION = 'A team discussion is a persistent record of a free-form conversation within a team.';
    private $author;
    /**The main text of the discussion.**/
    private string $body;
    private string $body_html;
    /**The current version of the body content. If provided, this update operation will be rejected if the given version does not match the latest version on the server.**/
    private string $body_version;
    private int $comments_count;
    private string $comments_url;
    private string $created_at;
    private string $last_edited_at;
    private string $html_url;
    private string $node_id;
    /**The unique sequence number of a team discussion.**/
    private int $number;
    /**Whether or not this discussion should be pinned for easy retrieval.**/
    private boolean $pinned;
    /**Whether or not this discussion should be restricted to team members and organization administrators.**/
    private boolean $private;
    private string $team_url;
    /**The title of the discussion.**/
    private string $title;
    private string $updated_at;
    private string $url;
    private object $reactions;
    public function author()
    {
        return $this->author;
    }
    public function body() : string
    {
        return $this->body;
    }
    public function body_html() : string
    {
        return $this->body_html;
    }
    public function body_version() : string
    {
        return $this->body_version;
    }
    public function comments_count() : int
    {
        return $this->comments_count;
    }
    public function comments_url() : string
    {
        return $this->comments_url;
    }
    public function created_at() : string
    {
        return $this->created_at;
    }
    public function last_edited_at() : string
    {
        return $this->last_edited_at;
    }
    public function html_url() : string
    {
        return $this->html_url;
    }
    public function node_id() : string
    {
        return $this->node_id;
    }
    public function number() : int
    {
        return $this->number;
    }
    public function pinned() : boolean
    {
        return $this->pinned;
    }
    public function private() : boolean
    {
        return $this->private;
    }
    public function team_url() : string
    {
        return $this->team_url;
    }
    public function title() : string
    {
        return $this->title;
    }
    public function updated_at() : string
    {
        return $this->updated_at;
    }
    public function url() : string
    {
        return $this->url;
    }
    public function reactions() : object
    {
        return $this->reactions;
    }
}
