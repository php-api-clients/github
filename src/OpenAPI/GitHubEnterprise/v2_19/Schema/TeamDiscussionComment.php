<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Schema;

final class TeamDiscussionComment
{
    public const SCHEMA_TITLE = 'Team Discussion Comment';
    public const SPL_HASH = '000000005bc9f61f000000002dbcf303';
    public const SCHEMA_DESCRIPTION = 'A reply to a discussion within a team.';
    private $author;
    /**
     * The main text of the comment.
     */
    private ?string $body = null;
    private ?string $body_html = null;
    /**
     * The current version of the body content. If provided, this update operation will be rejected if the given version does not match the latest version on the server.
     */
    private ?string $body_version = null;
    private ?string $created_at = null;
    private ?string $last_edited_at = null;
    private ?string $discussion_url = null;
    private ?string $html_url = null;
    private ?string $node_id = null;
    /**
     * The unique sequence number of a team discussion comment.
     */
    private ?int $number = null;
    private ?string $updated_at = null;
    private ?string $url = null;
    private ?object $reactions = null;
    public function author()
    {
        return $this->author;
    }
    public function body() : ?string
    {
        return $this->body;
    }
    public function body_html() : ?string
    {
        return $this->body_html;
    }
    public function body_version() : ?string
    {
        return $this->body_version;
    }
    public function created_at() : ?string
    {
        return $this->created_at;
    }
    public function last_edited_at() : ?string
    {
        return $this->last_edited_at;
    }
    public function discussion_url() : ?string
    {
        return $this->discussion_url;
    }
    public function html_url() : ?string
    {
        return $this->html_url;
    }
    public function node_id() : ?string
    {
        return $this->node_id;
    }
    public function number() : ?int
    {
        return $this->number;
    }
    public function updated_at() : ?string
    {
        return $this->updated_at;
    }
    public function url() : ?string
    {
        return $this->url;
    }
    public function reactions() : ?object
    {
        return $this->reactions;
    }
}
