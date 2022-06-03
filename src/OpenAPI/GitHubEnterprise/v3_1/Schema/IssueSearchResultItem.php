<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema;

final class IssueSearchResultItem
{
    public const SCHEMA_TITLE = 'Issue Search Result Item';
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
    private bool $locked;
    private ?string $active_lock_reason = null;
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\SimpleUser>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\SimpleUser::class)
     */
    private array $assignees = array();
    /**
     * Simple User
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\NullableSimpleUser::class)
     */
    private ?\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\NullableSimpleUser $user = null;
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\IssueSearchResultItem\Labels>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\IssueSearchResultItem\Labels::class)
     */
    private array $labels = array();
    private string $state;
    private ?string $state_reason = null;
    /**
     * Simple User
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\NullableSimpleUser::class)
     */
    private ?\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\NullableSimpleUser $assignee = null;
    /**
     * A collection of related issues and pull requests.
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\NullableMilestone::class)
     */
    private ?\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\NullableMilestone $milestone = null;
    private int $comments;
    private string $created_at;
    private string $updated_at;
    private ?string $closed_at = null;
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\IssueSearchResultItem\TextMatches>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\IssueSearchResultItem\TextMatches::class)
     */
    private array $text_matches = array();
    private array $pull_request = array();
    private ?string $body = null;
    private int $score;
    /**
     * How the author is associated with the repository.
     */
    private string $author_association;
    private ?bool $draft = null;
    /**
     * A git repository
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Repository::class)
     */
    private ?\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Repository $repository = null;
    private ?string $body_html = null;
    private ?string $body_text = null;
    private ?string $timeline_url = null;
    /**
     * GitHub apps are a new way to extend GitHub. They can be installed directly on organizations and user accounts and granted access to specific repositories. They come with granular permissions and built-in webhooks. GitHub apps are first class actors within GitHub.
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\NullableIntegration::class)
     */
    private ?\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\NullableIntegration $performed_via_github_app = null;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\ReactionRollup::class)
     */
    private ?\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\ReactionRollup $reactions = null;
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
    public function locked() : bool
    {
        return $this->locked;
    }
    public function active_lock_reason() : ?string
    {
        return $this->active_lock_reason;
    }
    /**
     * @return array<\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\SimpleUser>
     */
    public function assignees() : array
    {
        return $this->assignees;
    }
    /**
     * Simple User
     */
    public function user() : ?\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\NullableSimpleUser
    {
        return $this->user;
    }
    /**
     * @return array<\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\IssueSearchResultItem\Labels>
     */
    public function labels() : array
    {
        return $this->labels;
    }
    public function state() : string
    {
        return $this->state;
    }
    public function state_reason() : ?string
    {
        return $this->state_reason;
    }
    /**
     * Simple User
     */
    public function assignee() : ?\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\NullableSimpleUser
    {
        return $this->assignee;
    }
    /**
     * A collection of related issues and pull requests.
     */
    public function milestone() : ?\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\NullableMilestone
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
    public function closed_at() : ?string
    {
        return $this->closed_at;
    }
    /**
     * @return array<\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\IssueSearchResultItem\TextMatches>
     */
    public function text_matches() : array
    {
        return $this->text_matches;
    }
    public function pull_request() : array
    {
        return $this->pull_request;
    }
    public function body() : ?string
    {
        return $this->body;
    }
    public function score() : int
    {
        return $this->score;
    }
    /**
     * How the author is associated with the repository.
     */
    public function author_association() : string
    {
        return $this->author_association;
    }
    public function draft() : ?bool
    {
        return $this->draft;
    }
    /**
     * A git repository
     */
    public function repository() : ?\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Repository
    {
        return $this->repository;
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
     * GitHub apps are a new way to extend GitHub. They can be installed directly on organizations and user accounts and granted access to specific repositories. They come with granular permissions and built-in webhooks. GitHub apps are first class actors within GitHub.
     */
    public function performed_via_github_app() : ?\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\NullableIntegration
    {
        return $this->performed_via_github_app;
    }
    public function reactions() : ?\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\ReactionRollup
    {
        return $this->reactions;
    }
}
