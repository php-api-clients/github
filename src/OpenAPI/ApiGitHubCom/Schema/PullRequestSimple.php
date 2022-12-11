<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class PullRequestSimple
{
    public const SCHEMA_TITLE = 'Pull Request Simple';
    public const SCHEMA_DESCRIPTION = 'Pull Request Simple';
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
    private int $number;
    private string $state;
    private bool $locked;
    private string $title;
    private $user;
    private $body;
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\PullRequestSimple\Labels>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\PullRequestSimple\Labels::class)
     */
    private array $labels = array();
    private $milestone;
    private $active_lock_reason;
    private string $created_at;
    private string $updated_at;
    private $closed_at;
    private $merged_at;
    private $merge_commit_sha;
    private $assignee;
    private $assignees;
    private $requested_reviewers;
    private $requested_teams;
    private array $head = array();
    private array $base = array();
    private array $_links = array();
    /**
     * How the author is associated with the repository.
     */
    private string $author_association;
    /**
     * The status of auto merging a pull request.
     */
    private $auto_merge;
    /**
     * Indicates whether or not the pull request is a draft.
     */
    private ?bool $draft = null;
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
    public function number() : int
    {
        return $this->number;
    }
    public function state() : string
    {
        return $this->state;
    }
    public function locked() : bool
    {
        return $this->locked;
    }
    public function title() : string
    {
        return $this->title;
    }
    public function user()
    {
        return $this->user;
    }
    public function body()
    {
        return $this->body;
    }
    /**
     * @return array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\PullRequestSimple\Labels>
     */
    public function labels() : array
    {
        return $this->labels;
    }
    public function milestone()
    {
        return $this->milestone;
    }
    public function active_lock_reason()
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
    public function assignees()
    {
        return $this->assignees;
    }
    public function requested_reviewers()
    {
        return $this->requested_reviewers;
    }
    public function requested_teams()
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
    public function auto_merge()
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
}
