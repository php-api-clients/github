<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Schema;

final class PullRequestSimple
{
    public const SCHEMA_TITLE = 'Pull Request Simple';
    public const SPL_HASH = '000000001f1e27c7000000004be6709d';
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
    private string $body;
    private array $labels;
    private $milestone;
    private string $active_lock_reason;
    private string $created_at;
    private string $updated_at;
    private string $closed_at;
    private string $merged_at;
    private string $merge_commit_sha;
    private $assignee;
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Schema\SimpleUser>
     */
    private array $assignees;
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Schema\SimpleUser>
     */
    private array $requested_reviewers;
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Schema\TeamSimple>
     */
    private array $requested_teams;
    private object $head;
    private object $base;
    private object $_links;
    /**
     * How the author is associated with the repository.
     */
    private string $author_association;
    /**
     * Indicates whether or not the pull request is a draft.
     */
    private bool $draft;
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
    public function body() : string
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
    public function active_lock_reason() : string
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
    public function closed_at() : string
    {
        return $this->closed_at;
    }
    public function merged_at() : string
    {
        return $this->merged_at;
    }
    public function merge_commit_sha() : string
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
    public function head() : object
    {
        return $this->head;
    }
    public function base() : object
    {
        return $this->base;
    }
    public function _links() : object
    {
        return $this->_links;
    }
    public function author_association() : string
    {
        return $this->author_association;
    }
    public function draft() : bool
    {
        return $this->draft;
    }
}
