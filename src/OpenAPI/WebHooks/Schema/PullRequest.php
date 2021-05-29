<?php

namespace ApiClients\Client\Github\OpenAPI\WebHooks\Schema;

final class PullRequest
{
    public const SCHEMA_TITLE = 'Pull Request';
    public const SCHEMA_DESCRIPTION = '';
    private ?string $url = null;
    private ?int $id = null;
    private ?string $node_id = null;
    private ?string $html_url = null;
    private ?string $diff_url = null;
    private ?string $patch_url = null;
    private ?string $issue_url = null;
    /**
     * Number uniquely identifying the pull request within its repository.
     */
    private ?int $number = null;
    /**
     * State of this Pull Request. Either `open` or `closed`.
     */
    private ?string $state = null;
    private ?bool $locked = null;
    /**
     * The title of the pull request.
     */
    private ?string $title = null;
    private array $user = array();
    private ?string $body = null;
    private ?string $created_at = null;
    private ?string $updated_at = null;
    private $closed_at;
    private $merged_at;
    private $merge_commit_sha;
    private $assignee;
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\WebHooks\Schema\User>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\WebHooks\Schema\User::class)
     */
    private array $assignees = array();
    private array $requested_reviewers = array();
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\WebHooks\Schema\Team>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\WebHooks\Schema\Team::class)
     */
    private array $requested_teams = array();
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\WebHooks\Schema\Label>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\WebHooks\Schema\Label::class)
     */
    private array $labels = array();
    private $milestone;
    private ?string $commits_url = null;
    private ?string $review_comments_url = null;
    private ?string $review_comment_url = null;
    private ?string $comments_url = null;
    private ?string $statuses_url = null;
    private array $head = array();
    private array $base = array();
    private array $_links = array();
    /**
     * How the author is associated with the repository.
     */
    private ?string $author_association = null;
    private ?null $auto_merge = null;
    private $active_lock_reason;
    /**
     * Indicates whether or not the pull request is a draft.
     */
    private ?bool $draft = null;
    private $merged;
    private $mergeable;
    private $rebaseable;
    private ?string $mergeable_state = null;
    private $merged_by;
    private ?int $comments = null;
    private ?int $review_comments = null;
    /**
     * Indicates whether maintainers can modify the pull request.
     */
    private ?bool $maintainer_can_modify = null;
    private ?int $commits = null;
    private ?int $additions = null;
    private ?int $deletions = null;
    private ?int $changed_files = null;
    public function url() : ?string
    {
        return $this->url;
    }
    public function id() : ?int
    {
        return $this->id;
    }
    public function node_id() : ?string
    {
        return $this->node_id;
    }
    public function html_url() : ?string
    {
        return $this->html_url;
    }
    public function diff_url() : ?string
    {
        return $this->diff_url;
    }
    public function patch_url() : ?string
    {
        return $this->patch_url;
    }
    public function issue_url() : ?string
    {
        return $this->issue_url;
    }
    public function number() : ?int
    {
        return $this->number;
    }
    public function state() : ?string
    {
        return $this->state;
    }
    public function locked() : ?bool
    {
        return $this->locked;
    }
    public function title() : ?string
    {
        return $this->title;
    }
    public function user() : array
    {
        return $this->user;
    }
    public function body() : ?string
    {
        return $this->body;
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
    public function merged_at()
    {
        return $this->merged_at;
    }
    public function merge_commit_sha()
    {
        return $this->merge_commit_sha;
    }
    public function assignee()
    {
        return $this->assignee;
    }
    public function assignees() : array
    {
        return $this->assignees;
    }
    public function requested_reviewers() : array
    {
        return $this->requested_reviewers;
    }
    public function requested_teams() : array
    {
        return $this->requested_teams;
    }
    public function labels() : array
    {
        return $this->labels;
    }
    public function milestone()
    {
        return $this->milestone;
    }
    public function commits_url() : ?string
    {
        return $this->commits_url;
    }
    public function review_comments_url() : ?string
    {
        return $this->review_comments_url;
    }
    public function review_comment_url() : ?string
    {
        return $this->review_comment_url;
    }
    public function comments_url() : ?string
    {
        return $this->comments_url;
    }
    public function statuses_url() : ?string
    {
        return $this->statuses_url;
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
    public function author_association() : ?string
    {
        return $this->author_association;
    }
    public function auto_merge() : ?null
    {
        return $this->auto_merge;
    }
    public function active_lock_reason()
    {
        return $this->active_lock_reason;
    }
    public function draft() : ?bool
    {
        return $this->draft;
    }
    public function merged()
    {
        return $this->merged;
    }
    public function mergeable()
    {
        return $this->mergeable;
    }
    public function rebaseable()
    {
        return $this->rebaseable;
    }
    public function mergeable_state() : ?string
    {
        return $this->mergeable_state;
    }
    public function merged_by()
    {
        return $this->merged_by;
    }
    public function comments() : ?int
    {
        return $this->comments;
    }
    public function review_comments() : ?int
    {
        return $this->review_comments;
    }
    public function maintainer_can_modify() : ?bool
    {
        return $this->maintainer_can_modify;
    }
    public function commits() : ?int
    {
        return $this->commits;
    }
    public function additions() : ?int
    {
        return $this->additions;
    }
    public function deletions() : ?int
    {
        return $this->deletions;
    }
    public function changed_files() : ?int
    {
        return $this->changed_files;
    }
}
