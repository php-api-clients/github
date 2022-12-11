<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema;

final class IssueEvent
{
    public const SCHEMA_TITLE = 'Issue Event';
    public const SCHEMA_DESCRIPTION = 'Issue Event';
    private int $id;
    private string $node_id;
    private string $url;
    private $actor;
    private string $event;
    private $commit_id;
    private $commit_url;
    private string $created_at;
    private $issue;
    /**
     * Issue Event Label
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\IssueEventLabel::class)
     */
    private ?\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\IssueEventLabel $label = null;
    private $assignee;
    private $assigner;
    private $review_requester;
    private $requested_reviewer;
    /**
     * Groups of organization members that gives permissions on specified repositories.
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Team::class)
     */
    private ?\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Team $requested_team = null;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\IssueEventDismissedReview::class)
     */
    private ?\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\IssueEventDismissedReview $dismissed_review = null;
    /**
     * Issue Event Milestone
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\IssueEventMilestone::class)
     */
    private ?\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\IssueEventMilestone $milestone = null;
    /**
     * Issue Event Project Card
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\IssueEventProjectCard::class)
     */
    private ?\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\IssueEventProjectCard $project_card = null;
    /**
     * Issue Event Rename
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\IssueEventRename::class)
     */
    private ?\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\IssueEventRename $rename = null;
    /**
     * How the author is associated with the repository.
     */
    private ?string $author_association = null;
    private $lock_reason;
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
    public function commit_id()
    {
        return $this->commit_id;
    }
    public function commit_url()
    {
        return $this->commit_url;
    }
    public function created_at() : string
    {
        return $this->created_at;
    }
    public function issue()
    {
        return $this->issue;
    }
    /**
     * Issue Event Label
     */
    public function label() : ?\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\IssueEventLabel
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
    /**
     * Groups of organization members that gives permissions on specified repositories.
     */
    public function requested_team() : ?\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Team
    {
        return $this->requested_team;
    }
    public function dismissed_review() : ?\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\IssueEventDismissedReview
    {
        return $this->dismissed_review;
    }
    /**
     * Issue Event Milestone
     */
    public function milestone() : ?\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\IssueEventMilestone
    {
        return $this->milestone;
    }
    /**
     * Issue Event Project Card
     */
    public function project_card() : ?\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\IssueEventProjectCard
    {
        return $this->project_card;
    }
    /**
     * Issue Event Rename
     */
    public function rename() : ?\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\IssueEventRename
    {
        return $this->rename;
    }
    /**
     * How the author is associated with the repository.
     */
    public function author_association() : ?string
    {
        return $this->author_association;
    }
    public function lock_reason()
    {
        return $this->lock_reason;
    }
    public function performed_via_github_app()
    {
        return $this->performed_via_github_app;
    }
}
