<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class PullRequest
{
    public const SCHEMA_TITLE = 'Pull Request';
    public const SCHEMA_DESCRIPTION = 'Pull requests let you tell others about changes you\'ve pushed to a repository on GitHub. Once a pull request is sent, interested parties can review the set of changes, discuss potential modifications, and even push follow-up commits if necessary.';
    private string $url;
    private int $id;
    private string $node_id;
    private string $html_url;
    private string $diff_url;
    private string $patch_url;
    private string $issue_url;
    private string $commits_url;
    private string $review_comments_url;
    private string $review_comment_url;
    private string $comments_url;
    private string $statuses_url;
    /**
     * Number uniquely identifying the pull request within its repository.
     */
    private int $number;
    /**
     * State of this Pull Request. Either `open` or `closed`.
     */
    private string $state;
    private bool $locked;
    /**
     * The title of the pull request.
     */
    private string $title;
    /**
     * Simple User
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\NullableSimpleUser::class)
     */
    private ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\NullableSimpleUser $user = null;
    private ?string $body = null;
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\PullRequest\Labels>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\PullRequest\Labels::class)
     */
    private array $labels = array();
    /**
     * A collection of related issues and pull requests.
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\NullableMilestone::class)
     */
    private ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\NullableMilestone $milestone = null;
    private ?string $active_lock_reason = null;
    private string $created_at;
    private string $updated_at;
    private ?string $closed_at = null;
    private ?string $merged_at = null;
    private ?string $merge_commit_sha = null;
    /**
     * Simple User
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\NullableSimpleUser::class)
     */
    private ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\NullableSimpleUser $assignee = null;
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\SimpleUser>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\SimpleUser::class)
     */
    private array $assignees = array();
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\SimpleUser>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\SimpleUser::class)
     */
    private array $requested_reviewers = array();
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\TeamSimple>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\TeamSimple::class)
     */
    private array $requested_teams = array();
    private array $head = array();
    private array $base = array();
    private array $_links = array();
    /**
     * How the author is associated with the repository.
     */
    private string $author_association;
    /**
     * The status of auto merging a pull request.
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\AutoMerge::class)
     */
    private ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\AutoMerge $auto_merge = null;
    /**
     * Indicates whether or not the pull request is a draft.
     */
    private ?bool $draft = null;
    private bool $merged;
    private ?bool $mergeable = null;
    private ?bool $rebaseable = null;
    private string $mergeable_state;
    /**
     * Simple User
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\NullableSimpleUser::class)
     */
    private ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\NullableSimpleUser $merged_by = null;
    private int $comments;
    private int $review_comments;
    /**
     * Indicates whether maintainers can modify the pull request.
     */
    private bool $maintainer_can_modify;
    private int $commits;
    private int $additions;
    private int $deletions;
    private int $changed_files;
    public function url() : string
    {
        return $this->url;
    }
    public function id() : int
    {
        return $this->id;
    }
    public function node_id() : string
    {
        return $this->node_id;
    }
    public function html_url() : string
    {
        return $this->html_url;
    }
    public function diff_url() : string
    {
        return $this->diff_url;
    }
    public function patch_url() : string
    {
        return $this->patch_url;
    }
    public function issue_url() : string
    {
        return $this->issue_url;
    }
    public function commits_url() : string
    {
        return $this->commits_url;
    }
    public function review_comments_url() : string
    {
        return $this->review_comments_url;
    }
    public function review_comment_url() : string
    {
        return $this->review_comment_url;
    }
    public function comments_url() : string
    {
        return $this->comments_url;
    }
    public function statuses_url() : string
    {
        return $this->statuses_url;
    }
    /**
     * Number uniquely identifying the pull request within its repository.
     */
    public function number() : int
    {
        return $this->number;
    }
    /**
     * State of this Pull Request. Either `open` or `closed`.
     */
    public function state() : string
    {
        return $this->state;
    }
    public function locked() : bool
    {
        return $this->locked;
    }
    /**
     * The title of the pull request.
     */
    public function title() : string
    {
        return $this->title;
    }
    /**
     * Simple User
     */
    public function user() : ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\NullableSimpleUser
    {
        return $this->user;
    }
    public function body() : ?string
    {
        return $this->body;
    }
    /**
     * @return array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\PullRequest\Labels>
     */
    public function labels() : array
    {
        return $this->labels;
    }
    /**
     * A collection of related issues and pull requests.
     */
    public function milestone() : ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\NullableMilestone
    {
        return $this->milestone;
    }
    public function active_lock_reason() : ?string
    {
        return $this->active_lock_reason;
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
    public function merged_at() : ?string
    {
        return $this->merged_at;
    }
    public function merge_commit_sha() : ?string
    {
        return $this->merge_commit_sha;
    }
    /**
     * Simple User
     */
    public function assignee() : ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\NullableSimpleUser
    {
        return $this->assignee;
    }
    /**
     * @return array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\SimpleUser>
     */
    public function assignees() : array
    {
        return $this->assignees;
    }
    /**
     * @return array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\SimpleUser>
     */
    public function requested_reviewers() : array
    {
        return $this->requested_reviewers;
    }
    /**
     * @return array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\TeamSimple>
     */
    public function requested_teams() : array
    {
        return $this->requested_teams;
    }
    public function head() : array
    {
        return $this->head;
    }
    public function base() : array
    {
        return $this->base;
    }
    public function _links() : array
    {
        return $this->_links;
    }
    /**
     * How the author is associated with the repository.
     */
    public function author_association() : string
    {
        return $this->author_association;
    }
    /**
     * The status of auto merging a pull request.
     */
    public function auto_merge() : ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\AutoMerge
    {
        return $this->auto_merge;
    }
    /**
     * Indicates whether or not the pull request is a draft.
     */
    public function draft() : ?bool
    {
        return $this->draft;
    }
    public function merged() : bool
    {
        return $this->merged;
    }
    public function mergeable() : ?bool
    {
        return $this->mergeable;
    }
    public function rebaseable() : ?bool
    {
        return $this->rebaseable;
    }
    public function mergeable_state() : string
    {
        return $this->mergeable_state;
    }
    /**
     * Simple User
     */
    public function merged_by() : ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\NullableSimpleUser
    {
        return $this->merged_by;
    }
    public function comments() : int
    {
        return $this->comments;
    }
    public function review_comments() : int
    {
        return $this->review_comments;
    }
    /**
     * Indicates whether maintainers can modify the pull request.
     */
    public function maintainer_can_modify() : bool
    {
        return $this->maintainer_can_modify;
    }
    public function commits() : int
    {
        return $this->commits;
    }
    public function additions() : int
    {
        return $this->additions;
    }
    public function deletions() : int
    {
        return $this->deletions;
    }
    public function changed_files() : int
    {
        return $this->changed_files;
    }
}
