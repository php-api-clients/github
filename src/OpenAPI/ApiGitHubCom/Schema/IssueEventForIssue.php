<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class IssueEventForIssue
{
    public const SCHEMA_TITLE = 'Issue Event for Issue';
    public const SCHEMA_DESCRIPTION = 'Issue Event for Issue';
    private ?int $id = null;
    private ?string $node_id = null;
    private ?string $url = null;
    /**
     * Simple User
     */
    private ?object $actor = null;
    private ?string $event = null;
    private ?string $commit_id = null;
    private ?string $commit_url = null;
    private ?string $created_at = null;
    private ?string $sha = null;
    private ?string $html_url = null;
    private ?string $message = null;
    private ?string $issue_url = null;
    private ?string $updated_at = null;
    /**
     * How the author is associated with the repository.
     */
    private ?string $author_association = null;
    private ?string $body = null;
    private ?string $lock_reason = null;
    private ?string $submitted_at = null;
    private ?string $state = null;
    private ?string $pull_request_url = null;
    private ?string $body_html = null;
    private ?string $body_text = null;
    public function id() : ?int
    {
        return $this->id;
    }
    public function node_id() : ?string
    {
        return $this->node_id;
    }
    public function url() : ?string
    {
        return $this->url;
    }
    public function actor() : ?object
    {
        return $this->actor;
    }
    public function event() : ?string
    {
        return $this->event;
    }
    public function commit_id() : ?string
    {
        return $this->commit_id;
    }
    public function commit_url() : ?string
    {
        return $this->commit_url;
    }
    public function created_at() : ?string
    {
        return $this->created_at;
    }
    public function sha() : ?string
    {
        return $this->sha;
    }
    public function html_url() : ?string
    {
        return $this->html_url;
    }
    public function message() : ?string
    {
        return $this->message;
    }
    public function issue_url() : ?string
    {
        return $this->issue_url;
    }
    public function updated_at() : ?string
    {
        return $this->updated_at;
    }
    public function author_association() : ?string
    {
        return $this->author_association;
    }
    public function body() : ?string
    {
        return $this->body;
    }
    public function lock_reason() : ?string
    {
        return $this->lock_reason;
    }
    public function submitted_at() : ?string
    {
        return $this->submitted_at;
    }
    public function state() : ?string
    {
        return $this->state;
    }
    public function pull_request_url() : ?string
    {
        return $this->pull_request_url;
    }
    public function body_html() : ?string
    {
        return $this->body_html;
    }
    public function body_text() : ?string
    {
        return $this->body_text;
    }
}
