<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Schema;

final class IssueSimple
{
    public const SCHEMA_TITLE = 'Issue Simple';
    public const SCHEMA_DESCRIPTION = 'Issue Simple';
    private int $id;
    private string $node_id;
    private string $url;
    private string $repository_url;
    private string $labels_url;
    private string $comments_url;
    private string $events_url;
    private string $html_url;
    private int $number;
    private string $state;
    private string $title;
    private ?string $body = null;
    /**
     * Simple User
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Schema\NullableSimpleUser::class)
     */
    private ?\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Schema\NullableSimpleUser $user = null;
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Schema\Label>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Schema\Label::class)
     */
    private array $labels = array();
    /**
     * Simple User
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Schema\NullableSimpleUser::class)
     */
    private ?\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Schema\NullableSimpleUser $assignee = null;
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Schema\SimpleUser>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Schema\SimpleUser::class)
     */
    private array $assignees = array();
    /**
     * A collection of related issues and pull requests.
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Schema\NullableMilestone::class)
     */
    private ?\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Schema\NullableMilestone $milestone = null;
    private bool $locked;
    private ?string $active_lock_reason = null;
    private int $comments;
    private array $pull_request = array();
    private ?string $closed_at = null;
    private string $created_at;
    private string $updated_at;
    /**
     * How the author is associated with the repository.
     */
    private string $author_association;
    private ?string $body_html = null;
    private ?string $body_text = null;
    private ?string $timeline_url = null;
    /**
     * A git repository
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Schema\Repository::class)
     */
    private ?\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Schema\Repository $repository = null;
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
    public function number() : int
    {
        return $this->number;
    }
    public function state() : string
    {
        return $this->state;
    }
    public function title() : string
    {
        return $this->title;
    }
    public function body() : ?string
    {
        return $this->body;
    }
    /**
     * Simple User
     */
    public function user() : ?\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Schema\NullableSimpleUser
    {
        return $this->user;
    }
    /**
     * @return array<\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Schema\Label>
     */
    public function labels() : array
    {
        return $this->labels;
    }
    /**
     * Simple User
     */
    public function assignee() : ?\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Schema\NullableSimpleUser
    {
        return $this->assignee;
    }
    /**
     * @return array<\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Schema\SimpleUser>
     */
    public function assignees() : array
    {
        return $this->assignees;
    }
    /**
     * A collection of related issues and pull requests.
     */
    public function milestone() : ?\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Schema\NullableMilestone
    {
        return $this->milestone;
    }
    public function locked() : bool
    {
        return $this->locked;
    }
    public function active_lock_reason() : ?string
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
    public function closed_at() : ?string
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
    /**
     * How the author is associated with the repository.
     */
    public function author_association() : string
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
    /**
     * A git repository
     */
    public function repository() : ?\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Schema\Repository
    {
        return $this->repository;
    }
    /**
     * GitHub apps are a new way to extend GitHub. They can be installed directly on organizations and user accounts and granted access to specific repositories. They come with granular permissions and built-in webhooks. GitHub apps are first class actors within GitHub.
     */
    public function performed_via_github_app() : ?\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Schema\NullableIntegration
    {
        return $this->performed_via_github_app;
    }
}
