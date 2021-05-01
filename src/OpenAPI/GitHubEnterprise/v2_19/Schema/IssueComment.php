<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Schema;

final class IssueComment
{
    public const SCHEMA_TITLE = 'Issue Comment';
    public const SCHEMA_DESCRIPTION = 'Comments provide a way for people to collaborate on an issue.';
    /**Unique identifier of the issue comment**/
    private int $id;
    private string $node_id;
    /**URL for the issue comment**/
    private string $url;
    /**Contents of the issue comment**/
    private string $body;
    private string $body_text;
    private string $body_html;
    private string $html_url;
    private $user;
    private string $created_at;
    private string $updated_at;
    private string $issue_url;
    /**How the author is associated with the repository.**/
    private string $author_association;
    private $performed_via_github_app;
    private object $reactions;
    public function id() : int
    {
        return $this->id;
    }
    public function node_id() : string
    {
        return $this->node_id;
    }
    public function url() : string
    {
        return $this->url;
    }
    public function body() : string
    {
        return $this->body;
    }
    public function body_text() : string
    {
        return $this->body_text;
    }
    public function body_html() : string
    {
        return $this->body_html;
    }
    public function html_url() : string
    {
        return $this->html_url;
    }
    public function user()
    {
        return $this->user;
    }
    public function created_at() : string
    {
        return $this->created_at;
    }
    public function updated_at() : string
    {
        return $this->updated_at;
    }
    public function issue_url() : string
    {
        return $this->issue_url;
    }
    public function author_association() : string
    {
        return $this->author_association;
    }
    public function performed_via_github_app()
    {
        return $this->performed_via_github_app;
    }
    public function reactions() : object
    {
        return $this->reactions;
    }
}
