<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.21\Schema;

final class IssueEvent
{
    public const SCHEMA_TITLE = 'Issue Event';
    public const SCHEMA_DESCRIPTION = 'Issue Event';
    private int $id;
    private string $node_id;
    private string $url;
    private $actor;
    private string $event;
    private string $commit_id;
    private string $commit_url;
    private string $created_at;
    /**Issue Simple**/
    private object $issue;
    /**Issue Event Label**/
    private object $label;
    private $assignee;
    private $assigner;
    private $review_requester;
    private $requested_reviewer;
    /**Groups of organization members that gives permissions on specified repositories.**/
    private object $requested_team;
    private object $dismissed_review;
    /**Issue Event Milestone**/
    private object $milestone;
    /**Issue Event Project Card**/
    private object $project_card;
    /**Issue Event Rename**/
    private object $rename;
    /**How the author is associated with the repository.**/
    private string $author_association;
    private string $lock_reason;
    private $performed_via_github_app;
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
    public function actor()
    {
        return $this->actor;
    }
    public function event() : string
    {
        return $this->event;
    }
    public function commit_id() : string
    {
        return $this->commit_id;
    }
    public function commit_url() : string
    {
        return $this->commit_url;
    }
    public function created_at() : string
    {
        return $this->created_at;
    }
    public function issue() : object
    {
        return $this->issue;
    }
    public function label() : object
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
    public function requested_team() : object
    {
        return $this->requested_team;
    }
    public function dismissed_review() : object
    {
        return $this->dismissed_review;
    }
    public function milestone() : object
    {
        return $this->milestone;
    }
    public function project_card() : object
    {
        return $this->project_card;
    }
    public function rename() : object
    {
        return $this->rename;
    }
    public function author_association() : string
    {
        return $this->author_association;
    }
    public function lock_reason() : string
    {
        return $this->lock_reason;
    }
    public function performed_via_github_app()
    {
        return $this->performed_via_github_app;
    }
}
