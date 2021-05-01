<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.19\Schema;

final class PullRequestReviewComment
{
    public const SCHEMA_TITLE = 'Pull Request Review Comment';
    public const SCHEMA_DESCRIPTION = 'Pull Request Review Comments are comments on a portion of the Pull Request\'s diff.';
    /**URL for the pull request review comment**/
    private string $url;
    /**The ID of the pull request review to which the comment belongs.**/
    private int $pull_request_review_id;
    /**The ID of the pull request review comment.**/
    private int $id;
    /**The node ID of the pull request review comment.**/
    private string $node_id;
    /**The diff of the line that the comment refers to.**/
    private string $diff_hunk;
    /**The relative path of the file to which the comment applies.**/
    private string $path;
    /**The line index in the diff to which the comment applies.**/
    private int $position;
    /**The index of the original line in the diff to which the comment applies.**/
    private int $original_position;
    /**The SHA of the commit to which the comment applies.**/
    private string $commit_id;
    /**The SHA of the original commit to which the comment applies.**/
    private string $original_commit_id;
    /**The comment ID to reply to.**/
    private int $in_reply_to_id;
    /**Simple User**/
    private object $user;
    /**The text of the comment.**/
    private string $body;
    private string $created_at;
    private string $updated_at;
    /**HTML URL for the pull request review comment.**/
    private string $html_url;
    /**URL for the pull request that the review comment belongs to.**/
    private string $pull_request_url;
    /**How the author is associated with the repository.**/
    private string $author_association;
    private object $_links;
    private object $reactions;
    private string $body_html;
    private string $body_text;
    public function url() : string
    {
        return $this->url;
    }
    public function pull_request_review_id() : int
    {
        return $this->pull_request_review_id;
    }
    public function id() : int
    {
        return $this->id;
    }
    public function node_id() : string
    {
        return $this->node_id;
    }
    public function diff_hunk() : string
    {
        return $this->diff_hunk;
    }
    public function path() : string
    {
        return $this->path;
    }
    public function position() : int
    {
        return $this->position;
    }
    public function original_position() : int
    {
        return $this->original_position;
    }
    public function commit_id() : string
    {
        return $this->commit_id;
    }
    public function original_commit_id() : string
    {
        return $this->original_commit_id;
    }
    public function in_reply_to_id() : int
    {
        return $this->in_reply_to_id;
    }
    public function user() : object
    {
        return $this->user;
    }
    public function body() : string
    {
        return $this->body;
    }
    public function created_at() : string
    {
        return $this->created_at;
    }
    public function updated_at() : string
    {
        return $this->updated_at;
    }
    public function html_url() : string
    {
        return $this->html_url;
    }
    public function pull_request_url() : string
    {
        return $this->pull_request_url;
    }
    public function author_association() : string
    {
        return $this->author_association;
    }
    public function _links() : object
    {
        return $this->_links;
    }
    public function reactions() : object
    {
        return $this->reactions;
    }
    public function body_html() : string
    {
        return $this->body_html;
    }
    public function body_text() : string
    {
        return $this->body_text;
    }
}
