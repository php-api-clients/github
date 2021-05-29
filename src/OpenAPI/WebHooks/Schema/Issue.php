<?php

namespace ApiClients\Client\Github\OpenAPI\WebHooks\Schema;

final class Issue
{
    public const SCHEMA_TITLE = 'Issue';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * URL for the issue
     */
    private ?string $url = null;
    private ?string $repository_url = null;
    private ?string $labels_url = null;
    private ?string $comments_url = null;
    private ?string $events_url = null;
    private ?string $html_url = null;
    private ?int $id = null;
    private ?string $node_id = null;
    private ?int $number = null;
    /**
     * Title of the issue
     */
    private ?string $title = null;
    private array $user = array();
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\WebHooks\Schema\Label>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\WebHooks\Schema\Label::class)
     */
    private array $labels = array();
    /**
     * State of the issue; either 'open' or 'closed'
     */
    private ?string $state = null;
    private ?bool $locked = null;
    private $assignee;
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\WebHooks\Schema\User>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\WebHooks\Schema\User::class)
     */
    private array $assignees = array();
    private $milestone;
    private ?int $comments = null;
    private ?string $created_at = null;
    private ?string $updated_at = null;
    private $closed_at;
    /**
     * How the author is associated with the repository.
     */
    private ?string $author_association = null;
    private $active_lock_reason;
    private $performed_via_github_app;
    private array $pull_request = array();
    /**
     * Contents of the issue
     */
    private $body;
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
    public function id() : ?int
    {
        return $this->id;
    }
    public function node_id() : ?string
    {
        return $this->node_id;
    }
    public function number() : ?int
    {
        return $this->number;
    }
    public function title() : ?string
    {
        return $this->title;
    }
    public function user() : array
    {
        return $this->user;
    }
    public function labels() : array
    {
        return $this->labels;
    }
    public function state() : ?string
    {
        return $this->state;
    }
    public function locked() : ?bool
    {
        return $this->locked;
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
    public function comments() : ?int
    {
        return $this->comments;
    }
    public function created_at() : ?string
    {
        return $this->created_at;
    }
    public function updated_at() : ?string
    {
        return $this->updated_at;
    }
    public function closed_at()
    {
        return $this->closed_at;
    }
    public function author_association() : ?string
    {
        return $this->author_association;
    }
    public function active_lock_reason()
    {
        return $this->active_lock_reason;
    }
    public function performed_via_github_app()
    {
        return $this->performed_via_github_app;
    }
    public function pull_request() : array
    {
        return $this->pull_request;
    }
    public function body()
    {
        return $this->body;
    }
}
