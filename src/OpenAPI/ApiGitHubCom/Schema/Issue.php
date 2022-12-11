<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class Issue
{
    public const SCHEMA_TITLE = 'Issue';
    public const SCHEMA_DESCRIPTION = 'Issues are a great way to keep track of tasks, enhancements, and bugs for your projects.';
    private int $id;
    private string $node_id;
    /**
     * URL for the issue
     */
    private string $url;
    private string $repository_url;
    private string $labels_url;
    private string $comments_url;
    private string $events_url;
    private string $html_url;
    /**
     * Number uniquely identifying the issue within its repository
     */
    private int $number;
    /**
     * State of the issue; either 'open' or 'closed'
     */
    private string $state;
    /**
     * The reason for the current state
     */
    private $state_reason;
    /**
     * Title of the issue
     */
    private string $title;
    /**
     * Contents of the issue
     */
    private $body;
    private $user;
    /**
     * Labels to associate with this issue; pass one or more label names to replace the set of labels on this issue; send an empty array to clear all labels from the issue; note that the labels are silently dropped for users without push access to the repository
     */
    private array $labels = array();
    private $assignee;
    private $assignees;
    private $milestone;
    private bool $locked;
    private $active_lock_reason;
    private int $comments;
    private array $pull_request = array();
    private $closed_at;
    private string $created_at;
    private string $updated_at;
    private ?bool $draft = null;
    private $closed_by;
    private ?string $body_html = null;
    private ?string $body_text = null;
    private ?string $timeline_url = null;
    /**
     * A repository on GitHub.
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Repository::class)
     */
    private ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Repository $repository = null;
    private $performed_via_github_app;
    /**
     * How the author is associated with the repository.
     */
    private string $author_association;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ReactionRollup::class)
     */
    private ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ReactionRollup $reactions = null;
    public function id() : int
    {
        return $this->id;
    }
    public function node_id() : string
    {
        return $this->node_id;
    }
    /**
     * URL for the issue
     */
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
    /**
     * Number uniquely identifying the issue within its repository
     */
    public function number() : int
    {
        return $this->number;
    }
    /**
     * State of the issue; either 'open' or 'closed'
     */
    public function state() : string
    {
        return $this->state;
    }
    /**
     * The reason for the current state
     */
    public function state_reason()
    {
        return $this->state_reason;
    }
    /**
     * Title of the issue
     */
    public function title() : string
    {
        return $this->title;
    }
    /**
     * Contents of the issue
     */
    public function body()
    {
        return $this->body;
    }
    public function user()
    {
        return $this->user;
    }
    /**
     * Labels to associate with this issue; pass one or more label names to replace the set of labels on this issue; send an empty array to clear all labels from the issue; note that the labels are silently dropped for users without push access to the repository
     */
    public function labels() : array
    {
        return $this->labels;
    }
    public function assignee()
    {
        return $this->assignee;
    }
    public function assignees()
    {
        return $this->assignees;
    }
    public function milestone()
    {
        return $this->milestone;
    }
    public function locked() : bool
    {
        return $this->locked;
    }
    public function active_lock_reason()
    {
        return $this->active_lock_reason;
    }
    public function comments() : int
    {
        return $this->comments;
    }
    public function pull_request() : array
    {
        return $this->pull_request;
    }
    public function closed_at()
    {
        return $this->closed_at;
    }
    public function created_at() : string
    {
        return $this->created_at;
    }
    public function updated_at() : string
    {
        return $this->updated_at;
    }
    public function draft() : ?bool
    {
        return $this->draft;
    }
    public function closed_by()
    {
        return $this->closed_by;
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
    /**
     * A repository on GitHub.
     */
    public function repository() : ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Repository
    {
        return $this->repository;
    }
    public function performed_via_github_app()
    {
        return $this->performed_via_github_app;
    }
    /**
     * How the author is associated with the repository.
     */
    public function author_association() : string
    {
        return $this->author_association;
    }
    public function reactions() : ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ReactionRollup
    {
        return $this->reactions;
    }
}
