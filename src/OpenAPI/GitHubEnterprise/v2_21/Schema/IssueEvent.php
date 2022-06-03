<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Schema;

final class IssueEvent
{
    public const SCHEMA_TITLE = 'Issue Event';
    public const SCHEMA_DESCRIPTION = 'Issue Event';
    private int $id;
    private string $node_id;
    private string $url;
    /**
     * Simple User
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Schema\NullableSimpleUser::class)
     */
    private ?\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Schema\NullableSimpleUser $actor = null;
    private string $event;
    private ?string $commit_id = null;
    private ?string $commit_url = null;
    private string $created_at;
    /**
     * Issue Simple
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Schema\IssueSimple::class)
     */
    private ?\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Schema\IssueSimple $issue = null;
    /**
     * Issue Event Label
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Schema\IssueEventLabel::class)
     */
    private ?\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Schema\IssueEventLabel $label = null;
    /**
     * Simple User
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Schema\NullableSimpleUser::class)
     */
    private ?\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Schema\NullableSimpleUser $assignee = null;
    /**
     * Simple User
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Schema\NullableSimpleUser::class)
     */
    private ?\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Schema\NullableSimpleUser $assigner = null;
    /**
     * Simple User
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Schema\NullableSimpleUser::class)
     */
    private ?\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Schema\NullableSimpleUser $review_requester = null;
    /**
     * Simple User
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Schema\NullableSimpleUser::class)
     */
    private ?\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Schema\NullableSimpleUser $requested_reviewer = null;
    /**
     * Groups of organization members that gives permissions on specified repositories.
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Schema\Team::class)
     */
    private ?\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Schema\Team $requested_team = null;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Schema\IssueEventDismissedReview::class)
     */
    private ?\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Schema\IssueEventDismissedReview $dismissed_review = null;
    /**
     * Issue Event Milestone
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Schema\IssueEventMilestone::class)
     */
    private ?\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Schema\IssueEventMilestone $milestone = null;
    /**
     * Issue Event Project Card
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Schema\IssueEventProjectCard::class)
     */
    private ?\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Schema\IssueEventProjectCard $project_card = null;
    /**
     * Issue Event Rename
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Schema\IssueEventRename::class)
     */
    private ?\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Schema\IssueEventRename $rename = null;
    /**
     * How the author is associated with the repository.
     */
    private ?string $author_association = null;
    private ?string $lock_reason = null;
    /**
     * GitHub apps are a new way to extend GitHub. They can be installed directly on organizations and user accounts and granted access to specific repositories. They come with granular permissions and built-in webhooks. GitHub apps are first class actors within GitHub.
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Schema\NullableIntegration::class)
     */
    private ?\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Schema\NullableIntegration $performed_via_github_app = null;
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
    /**
     * Simple User
     */
    public function actor() : ?\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Schema\NullableSimpleUser
    {
        return $this->actor;
    }
    public function event() : string
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
    public function created_at() : string
    {
        return $this->created_at;
    }
    /**
     * Issue Simple
     */
    public function issue() : ?\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Schema\IssueSimple
    {
        return $this->issue;
    }
    /**
     * Issue Event Label
     */
    public function label() : ?\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Schema\IssueEventLabel
    {
        return $this->label;
    }
    /**
     * Simple User
     */
    public function assignee() : ?\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Schema\NullableSimpleUser
    {
        return $this->assignee;
    }
    /**
     * Simple User
     */
    public function assigner() : ?\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Schema\NullableSimpleUser
    {
        return $this->assigner;
    }
    /**
     * Simple User
     */
    public function review_requester() : ?\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Schema\NullableSimpleUser
    {
        return $this->review_requester;
    }
    /**
     * Simple User
     */
    public function requested_reviewer() : ?\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Schema\NullableSimpleUser
    {
        return $this->requested_reviewer;
    }
    /**
     * Groups of organization members that gives permissions on specified repositories.
     */
    public function requested_team() : ?\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Schema\Team
    {
        return $this->requested_team;
    }
    public function dismissed_review() : ?\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Schema\IssueEventDismissedReview
    {
        return $this->dismissed_review;
    }
    /**
     * Issue Event Milestone
     */
    public function milestone() : ?\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Schema\IssueEventMilestone
    {
        return $this->milestone;
    }
    /**
     * Issue Event Project Card
     */
    public function project_card() : ?\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Schema\IssueEventProjectCard
    {
        return $this->project_card;
    }
    /**
     * Issue Event Rename
     */
    public function rename() : ?\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Schema\IssueEventRename
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
    public function lock_reason() : ?string
    {
        return $this->lock_reason;
    }
    /**
     * GitHub apps are a new way to extend GitHub. They can be installed directly on organizations and user accounts and granted access to specific repositories. They come with granular permissions and built-in webhooks. GitHub apps are first class actors within GitHub.
     */
    public function performed_via_github_app() : ?\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Schema\NullableIntegration
    {
        return $this->performed_via_github_app;
    }
}
