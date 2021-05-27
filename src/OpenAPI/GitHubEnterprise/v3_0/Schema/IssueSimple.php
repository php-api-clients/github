<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Schema;

final class IssueSimple
{
    public const SCHEMA_TITLE = 'Issue Simple';
    public const SCHEMA_DESCRIPTION = 'Issue Simple';
    private ?int $id = null;
    private ?string $node_id = null;
    private ?string $url = null;
    private ?string $repository_url = null;
    private ?string $labels_url = null;
    private ?string $comments_url = null;
    private ?string $events_url = null;
    private ?string $html_url = null;
    private ?int $number = null;
    private ?string $state = null;
    private ?string $title = null;
    private ?string $body = null;
    private $user;
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Schema\Label>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Schema\Label::class)
     */
    private array $labels = array();
    private $assignee;
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Schema\SimpleUser>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Schema\SimpleUser::class)
     */
    private array $assignees = array();
    private $milestone;
    private ?bool $locked = null;
    private ?string $active_lock_reason = null;
    private ?int $comments = null;
    private array $pull_request = array();
    private ?string $closed_at = null;
    private ?string $created_at = null;
    private ?string $updated_at = null;
    /**
     * How the author is associated with the repository.
     */
    private ?string $author_association = null;
    private ?string $body_html = null;
    private ?string $body_text = null;
    private ?string $timeline_url = null;
    /**
     * A git repository
     */
    private array $repository = array();
    private $performed_via_github_app;
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
    public function repository_url() : ?string
    {
        return $this->repository_url;
    }
    public function labels_url() : ?string
    {
        return $this->labels_url;
    }
    public function comments_url() : ?string
    {
        return $this->comments_url;
    }
    public function events_url() : ?string
    {
        return $this->events_url;
    }
    public function html_url() : ?string
    {
        return $this->html_url;
    }
    public function number() : ?int
    {
        return $this->number;
    }
    public function state() : ?string
    {
        return $this->state;
    }
    public function title() : ?string
    {
        return $this->title;
    }
    public function body() : ?string
    {
        return $this->body;
    }
    public function user()
    {
        return $this->user;
    }
    public function labels() : array
    {
        return $this->labels;
    }
    public function assignee()
    {
        return $this->assignee;
    }
    public function assignees() : array
    {
        return $this->assignees;
    }
    public function milestone()
    {
        return $this->milestone;
    }
    public function locked() : ?bool
    {
        return $this->locked;
    }
    public function active_lock_reason() : ?string
    {
        return $this->active_lock_reason;
    }
    public function comments() : ?int
    {
        return $this->comments;
    }
    public function pull_request() : array
    {
        return $this->pull_request;
    }
    public function closed_at() : ?string
    {
        return $this->closed_at;
    }
    public function created_at() : ?string
    {
        return $this->created_at;
    }
    public function updated_at() : ?string
    {
        return $this->updated_at;
    }
    public function author_association() : ?string
    {
        return $this->author_association;
    }
    public function body_html() : ?string
    {
        return $this->body_html;
    }
    public function body_text() : ?string
    {
        return $this->body_text;
    }
    public function timeline_url() : ?string
    {
        return $this->timeline_url;
    }
    public function repository() : array
    {
        return $this->repository;
    }
    public function performed_via_github_app()
    {
        return $this->performed_via_github_app;
    }
}
