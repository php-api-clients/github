<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema;

final class IssueEvent
{
    public const SCHEMA_TITLE       = 'Issue Event';
    public const SCHEMA_DESCRIPTION = 'Issue Event';
    private int $id;
    private string $node_id;
    private string $url;
    private $actor;
    private string $event;
    private string $commit_id;
    private string $commit_url;
    private string $created_at;
    /**
     * Issue Simple
     *
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\IssueSimple::class)
     */
    private IssueSimple $issue = [];
    /**
     * Issue Event Label
     *
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\IssueEventLabel::class)
     */
    private IssueEventLabel $label = [];
    private $assignee;
    private $assigner;
    private $review_requester;
    private $requested_reviewer;
    /**
     * Groups of organization members that gives permissions on specified repositories.
     *
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Team::class)
     */
    private Team $requested_team = [];
    /** @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\IssueEventDismissedReview::class) */
    private IssueEventDismissedReview $dismissed_review = [];
    /**
     * Issue Event Milestone
     *
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\IssueEventMilestone::class)
     */
    private IssueEventMilestone $milestone = [];
    /**
     * Issue Event Project Card
     *
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\IssueEventProjectCard::class)
     */
    private IssueEventProjectCard $project_card = [];
    /**
     * Issue Event Rename
     *
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\IssueEventRename::class)
     */
    private IssueEventRename $rename = [];
    /**
     * How the author is associated with the repository.
     */
    private string $author_association;
    private string $lock_reason;
    private $performed_via_github_app;

    public function id(): int
    {
        return $this->id;
    }

    public function node_id(): string
    {
        return $this->node_id;
    }

    public function url(): string
    {
        return $this->url;
    }

    public function actor()
    {
        return $this->actor;
    }

    public function event(): string
    {
        return $this->event;
    }

    public function commit_id(): string
    {
        return $this->commit_id;
    }

    public function commit_url(): string
    {
        return $this->commit_url;
    }

    public function created_at(): string
    {
        return $this->created_at;
    }

    /**
     * Issue Simple
     */
    public function issue(): IssueSimple
    {
        return $this->issue;
    }

    /**
     * Issue Event Label
     */
    public function label(): IssueEventLabel
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
    public function requested_team(): Team
    {
        return $this->requested_team;
    }

    public function dismissed_review(): IssueEventDismissedReview
    {
        return $this->dismissed_review;
    }

    /**
     * Issue Event Milestone
     */
    public function milestone(): IssueEventMilestone
    {
        return $this->milestone;
    }

    /**
     * Issue Event Project Card
     */
    public function project_card(): IssueEventProjectCard
    {
        return $this->project_card;
    }

    /**
     * Issue Event Rename
     */
    public function rename(): IssueEventRename
    {
        return $this->rename;
    }

    /**
     * How the author is associated with the repository.
     */
    public function author_association(): string
    {
        return $this->author_association;
    }

    public function lock_reason(): string
    {
        return $this->lock_reason;
    }

    public function performed_via_github_app()
    {
        return $this->performed_via_github_app;
    }
}