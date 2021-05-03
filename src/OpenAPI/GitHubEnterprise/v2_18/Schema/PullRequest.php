<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Schema;

final class PullRequest
{
    public const SCHEMA_TITLE = 'Pull Request';
    public const SPL_HASH = '000000002eab633500000000697c5254';
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
    private boolean $locked;
    /**
     * The title of the pull request.
     */
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
     * @var array<\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Schema\SimpleUser>
     */
    private array $assignees;
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Schema\SimpleUser>
     */
    private array $requested_reviewers;
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Schema\TeamSimple>
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
    private boolean $draft;
    private boolean $merged;
    private boolean $mergeable;
    private boolean $rebaseable;
    private string $mergeable_state;
    private $merged_by;
    private int $comments;
    private int $review_comments;
    /**
     * Indicates whether maintainers can modify the pull request.
     */
    private boolean $maintainer_can_modify;
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
    public function number() : int
    {
        return $this->number;
    }
    public function state() : string
    {
        return $this->state;
    }
    public function locked() : boolean
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
    public function draft() : boolean
    {
        return $this->draft;
    }
    public function merged() : boolean
    {
        return $this->merged;
    }
    public function mergeable() : boolean
    {
        return $this->mergeable;
    }
    public function rebaseable() : boolean
    {
        return $this->rebaseable;
    }
    public function mergeable_state() : string
    {
        return $this->mergeable_state;
    }
    public function merged_by()
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
    public function maintainer_can_modify() : boolean
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
