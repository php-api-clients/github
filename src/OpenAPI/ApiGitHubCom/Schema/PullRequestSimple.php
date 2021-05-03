<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class PullRequestSimple
{
    public const SCHEMA_TITLE = 'Pull Request Simple';
    public const SCHEMA_DESCRIPTION = 'Pull Request Simple';
    private ?string $url = null;
    private ?int $id = null;
    private ?string $node_id = null;
    private ?string $html_url = null;
    private ?string $diff_url = null;
    private ?string $patch_url = null;
    private ?string $issue_url = null;
    private ?string $commits_url = null;
    private ?string $review_comments_url = null;
    private ?string $review_comment_url = null;
    private ?string $comments_url = null;
    private ?string $statuses_url = null;
    private ?int $number = null;
    private ?string $state = null;
    private ?bool $locked = null;
    private ?string $title = null;
    private $user;
    private ?string $body = null;
    private array $labels = array();
    private $milestone;
    private ?string $active_lock_reason = null;
    private ?string $created_at = null;
    private ?string $updated_at = null;
    private ?string $closed_at = null;
    private ?string $merged_at = null;
    private ?string $merge_commit_sha = null;
    private $assignee;
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\SimpleUser>
     */
    private array $assignees = array();
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\SimpleUser>
     */
    private array $requested_reviewers = array();
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\TeamSimple>
     */
    private array $requested_teams = array();
    private ?object $head = null;
    private ?object $base = null;
    private ?object $_links = null;
    /**
     * How the author is associated with the repository.
     */
    private ?string $author_association = null;
    /**
     * The status of auto merging a pull request.
     */
    private ?object $auto_merge = null;
    /**
     * Indicates whether or not the pull request is a draft.
     */
    private ?bool $draft = null;
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
    public function user()
    {
        return $this->user;
    }
    public function body() : ?string
    {
        return $this->body;
    }
    public function labels() : array
    {
        return $this->labels;
    }
    public function milestone()
    {
        return $this->milestone;
    }
    public function active_lock_reason() : ?string
    {
        return $this->active_lock_reason;
    }
    public function created_at() : ?string
    {
        return $this->created_at;
    }
    public function updated_at() : ?string
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
    public function head() : ?object
    {
        return $this->head;
    }
    public function base() : ?object
    {
        return $this->base;
    }
    public function _links() : ?object
    {
        return $this->_links;
    }
    public function author_association() : ?string
    {
        return $this->author_association;
    }
    public function auto_merge() : ?object
    {
        return $this->auto_merge;
    }
    public function draft() : ?bool
    {
        return $this->draft;
    }
}
