<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class PullRequestReviewComment
{
    public const SCHEMA_TITLE       = 'Pull Request Review Comment';
    public const SCHEMA_DESCRIPTION = 'Pull Request Review Comments are comments on a portion of the Pull Request\'s diff.';
    /**
     * URL for the pull request review comment
     */
    private ?string $url = null;
    /**
     * The ID of the pull request review to which the comment belongs.
     */
    private ?int $pull_request_review_id = null;
    /**
     * The ID of the pull request review comment.
     */
    private ?int $id = null;
    /**
     * The node ID of the pull request review comment.
     */
    private ?string $node_id = null;
    /**
     * The diff of the line that the comment refers to.
     */
    private ?string $diff_hunk = null;
    /**
     * The relative path of the file to which the comment applies.
     */
    private ?string $path = null;
    /**
     * The line index in the diff to which the comment applies.
     */
    private ?int $position = null;
    /**
     * The index of the original line in the diff to which the comment applies.
     */
    private ?int $original_position = null;
    /**
     * The SHA of the commit to which the comment applies.
     */
    private ?string $commit_id = null;
    /**
     * The SHA of the original commit to which the comment applies.
     */
    private ?string $original_commit_id = null;
    /**
     * The comment ID to reply to.
     */
    private ?int $in_reply_to_id = null;
    /**
     * Simple User
     */
    private array $user = [];
    /**
     * The text of the comment.
     */
    private ?string $body       = null;
    private ?string $created_at = null;
    private ?string $updated_at = null;
    /**
     * HTML URL for the pull request review comment.
     */
    private ?string $html_url = null;
    /**
     * URL for the pull request that the review comment belongs to.
     */
    private ?string $pull_request_url = null;
    /**
     * How the author is associated with the repository.
     */
    private ?string $author_association = null;
    private array $_links               = [];
    /**
     * The first line of the range for a multi-line comment.
     */
    private ?int $start_line = null;
    /**
     * The first line of the range for a multi-line comment.
     */
    private ?int $original_start_line = null;
    /**
     * The side of the first line of the range for a multi-line comment.
     */
    private ?string $start_side = null;
    /**
     * The line of the blob to which the comment applies. The last line of the range for a multi-line comment
     */
    private ?int $line = null;
    /**
     * The line of the blob to which the comment applies. The last line of the range for a multi-line comment
     */
    private ?int $original_line = null;
    /**
     * The side of the diff to which the comment applies. The side of the last line of the range for a multi-line comment
     */
    private ?string $side      = null;
    private array $reactions   = [];
    private ?string $body_html = null;
    private ?string $body_text = null;

    public function url(): ?string
    {
        return $this->url;
    }

    public function pull_request_review_id(): ?int
    {
        return $this->pull_request_review_id;
    }

    public function id(): ?int
    {
        return $this->id;
    }

    public function node_id(): ?string
    {
        return $this->node_id;
    }

    public function diff_hunk(): ?string
    {
        return $this->diff_hunk;
    }

    public function path(): ?string
    {
        return $this->path;
    }

    public function position(): ?int
    {
        return $this->position;
    }

    public function original_position(): ?int
    {
        return $this->original_position;
    }

    public function commit_id(): ?string
    {
        return $this->commit_id;
    }

    public function original_commit_id(): ?string
    {
        return $this->original_commit_id;
    }

    public function in_reply_to_id(): ?int
    {
        return $this->in_reply_to_id;
    }

    public function user(): array
    {
        return $this->user;
    }

    public function body(): ?string
    {
        return $this->body;
    }

    public function created_at(): ?string
    {
        return $this->created_at;
    }

    public function updated_at(): ?string
    {
        return $this->updated_at;
    }

    public function html_url(): ?string
    {
        return $this->html_url;
    }

    public function pull_request_url(): ?string
    {
        return $this->pull_request_url;
    }

    public function author_association(): ?string
    {
        return $this->author_association;
    }

    public function _links(): array
    {
        return $this->_links;
    }

    public function start_line(): ?int
    {
        return $this->start_line;
    }

    public function original_start_line(): ?int
    {
        return $this->original_start_line;
    }

    public function start_side(): ?string
    {
        return $this->start_side;
    }

    public function line(): ?int
    {
        return $this->line;
    }

    public function original_line(): ?int
    {
        return $this->original_line;
    }

    public function side(): ?string
    {
        return $this->side;
    }

    public function reactions(): array
    {
        return $this->reactions;
    }

    public function body_html(): ?string
    {
        return $this->body_html;
    }

    public function body_text(): ?string
    {
        return $this->body_text;
    }
}
