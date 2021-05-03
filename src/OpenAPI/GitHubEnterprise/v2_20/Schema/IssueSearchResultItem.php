<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Schema;

final class IssueSearchResultItem
{
    public const SCHEMA_TITLE = 'Issue Search Result Item';
    public const SPL_HASH = '000000001c238f97000000003890ca58';
    public const SCHEMA_DESCRIPTION = 'Issue Search Result Item';
    private string $url;
    private string $repository_url;
    private string $labels_url;
    private string $comments_url;
    private string $events_url;
    private string $html_url;
    private int $id;
    private string $node_id;
    private int $number;
    private string $title;
    private boolean $locked;
    private string $active_lock_reason;
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Schema\SimpleUser>
     */
    private array $assignees;
    private $user;
    private array $labels;
    private string $state;
    private $assignee;
    private $milestone;
    private int $comments;
    private string $created_at;
    private string $updated_at;
    private string $closed_at;
    private array $text_matches;
    private object $pull_request;
    private string $body;
    private number $score;
    /**
     * How the author is associated with the repository.
     */
    private string $author_association;
    private boolean $draft;
    /**
     * A git repository
     */
    private object $repository;
    private string $body_html;
    private string $body_text;
    private string $timeline_url;
    private $performed_via_github_app;
    public function url() : string
    {
        return $this->url;
    }
    public function repository_url() : string
    {
        return $this->repository_url;
    }
    public function labels_url() : string
    {
        return $this->labels_url;
    }
    public function comments_url() : string
    {
        return $this->comments_url;
    }
    public function events_url() : string
    {
        return $this->events_url;
    }
    public function html_url() : string
    {
        return $this->html_url;
    }
    public function id() : int
    {
        return $this->id;
    }
    public function node_id() : string
    {
        return $this->node_id;
    }
    public function number() : int
    {
        return $this->number;
    }
    public function title() : string
    {
        return $this->title;
    }
    public function locked() : boolean
    {
        return $this->locked;
    }
    public function active_lock_reason() : string
    {
        return $this->active_lock_reason;
    }
    public function assignees() : array
    {
        return $this->assignees;
    }
    public function user()
    {
        return $this->user;
    }
    public function labels() : array
    {
        return $this->labels;
    }
    public function state() : string
    {
        return $this->state;
    }
    public function assignee()
    {
        return $this->assignee;
    }
    public function milestone()
    {
        return $this->milestone;
    }
    public function comments() : int
    {
        return $this->comments;
    }
    public function created_at() : string
    {
        return $this->created_at;
    }
    public function updated_at() : string
    {
        return $this->updated_at;
    }
    public function closed_at() : string
    {
        return $this->closed_at;
    }
    public function text_matches() : array
    {
        return $this->text_matches;
    }
    public function pull_request() : object
    {
        return $this->pull_request;
    }
    public function body() : string
    {
        return $this->body;
    }
    public function score() : number
    {
        return $this->score;
    }
    public function author_association() : string
    {
        return $this->author_association;
    }
    public function draft() : boolean
    {
        return $this->draft;
    }
    public function repository() : object
    {
        return $this->repository;
    }
    public function body_html() : string
    {
        return $this->body_html;
    }
    public function body_text() : string
    {
        return $this->body_text;
    }
    public function timeline_url() : string
    {
        return $this->timeline_url;
    }
    public function performed_via_github_app()
    {
        return $this->performed_via_github_app;
    }
}
