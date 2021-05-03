<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class IssueEvent
{
    public const SCHEMA_TITLE = 'Issue Event';
    public const SPL_HASH = '00000000729dca7200000000797f0b2e';
    public const SCHEMA_DESCRIPTION = 'Issue Event';
    private ?int $id = null;
    private ?string $node_id = null;
    private ?string $url = null;
    private $actor;
    private ?string $event = null;
    private ?string $commit_id = null;
    private ?string $commit_url = null;
    private ?string $created_at = null;
    /**
     * Issue Simple
     */
    private ?object $issue = null;
    /**
     * Issue Event Label
     */
    private ?object $label = null;
    private $assignee;
    private $assigner;
    private $review_requester;
    private $requested_reviewer;
    /**
     * Groups of organization members that gives permissions on specified repositories.
     */
    private ?object $requested_team = null;
    private ?object $dismissed_review = null;
    /**
     * Issue Event Milestone
     */
    private ?object $milestone = null;
    /**
     * Issue Event Project Card
     */
    private ?object $project_card = null;
    /**
     * Issue Event Rename
     */
    private ?object $rename = null;
    /**
     * How the author is associated with the repository.
     */
    private ?string $author_association = null;
    private ?string $lock_reason = null;
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
    public function actor()
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
    public function issue() : ?object
    {
        return $this->issue;
    }
    public function label() : ?object
    {
        return $this->label;
    }
    public function assignee()
    {
        return $this->assignee;
    }
    public function assigner()
    {
        return $this->assigner;
    }
    public function review_requester()
    {
        return $this->review_requester;
    }
    public function requested_reviewer()
    {
        return $this->requested_reviewer;
    }
    public function requested_team() : ?object
    {
        return $this->requested_team;
    }
    public function dismissed_review() : ?object
    {
        return $this->dismissed_review;
    }
    public function milestone() : ?object
    {
        return $this->milestone;
    }
    public function project_card() : ?object
    {
        return $this->project_card;
    }
    public function rename() : ?object
    {
        return $this->rename;
    }
    public function author_association() : ?string
    {
        return $this->author_association;
    }
    public function lock_reason() : ?string
    {
        return $this->lock_reason;
    }
    public function performed_via_github_app()
    {
        return $this->performed_via_github_app;
    }
}
