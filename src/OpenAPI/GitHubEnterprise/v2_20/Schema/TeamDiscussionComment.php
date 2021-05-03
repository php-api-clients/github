<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Schema;

final class TeamDiscussionComment
{
    public const SCHEMA_TITLE = 'Team Discussion Comment';
    public const SPL_HASH = '000000001c238d3d000000003890ca58';
    public const SCHEMA_DESCRIPTION = 'A reply to a discussion within a team.';
    private $author;
    /**
     * The main text of the comment.
     */
    private string $body;
    private string $body_html;
    /**
     * The current version of the body content. If provided, this update operation will be rejected if the given version does not match the latest version on the server.
     */
    private string $body_version;
    private string $created_at;
    private string $last_edited_at;
    private string $discussion_url;
    private string $html_url;
    private string $node_id;
    /**
     * The unique sequence number of a team discussion comment.
     */
    private int $number;
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
    public function created_at() : string
    {
        return $this->created_at;
    }
    public function last_edited_at() : string
    {
        return $this->last_edited_at;
    }
    public function discussion_url() : string
    {
        return $this->discussion_url;
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
