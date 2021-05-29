<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\WebHooks\Schema;

final class PullRequestReviewComment
{
    public const SCHEMA_TITLE       = 'Pull Request Review Comment';
    public const SCHEMA_DESCRIPTION = 'The [comment](https://docs.github.com/en/rest/reference/pulls#comments) itself.';
    /**
     * URL for the pull request review comment
     */
    private string $url;
    /**
     * The ID of the pull request review to which the comment belongs.
     */
    private int $pull_request_review_id;
    /**
     * The ID of the pull request review comment.
     */
    private int $id;
    /**
     * The node ID of the pull request review comment.
     */
    private string $node_id;
    /**
     * The diff of the line that the comment refers to.
     */
    private string $diff_hunk;
    /**
     * The relative path of the file to which the comment applies.
     */
    private string $path;
    /**
     * The line index in the diff to which the comment applies.
     */
    private $position;
    /**
     * The index of the original line in the diff to which the comment applies.
     */
    private int $original_position;
    /**
     * The SHA of the commit to which the comment applies.
     */
    private string $commit_id;
    /**
     * The SHA of the original commit to which the comment applies.
     */
    private string $original_commit_id;
    /** @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\WebHooks\Schema\User::class) */
    private User $user;
    /**
     * The text of the comment.
     */
    private string $body;
    private string $created_at;
    private string $updated_at;
    /**
     * HTML URL for the pull request review comment.
     */
    private string $html_url;
    /**
     * URL for the pull request that the review comment belongs to.
     */
    private string $pull_request_url;
    /**
     * How the author is associated with the repository.
     */
    private string $author_association;
    private array $_links = [];
    /**
     * The first line of the range for a multi-line comment.
     */
    private $start_line;
    /**
     * The first line of the range for a multi-line comment.
     */
    private $original_start_line;
    /**
     * The side of the first line of the range for a multi-line comment.
     */
    private $start_side;
    /**
     * The line of the blob to which the comment applies. The last line of the range for a multi-line comment
     */
    private $line;
    /**
     * The line of the blob to which the comment applies. The last line of the range for a multi-line comment
     */
    private int $original_line;
    /**
     * The side of the first line of the range for a multi-line comment.
     */
    private string $side;
    /**
     * The comment ID to reply to.
     */
    private int $in_reply_to_id;

    /**
     * URL for the pull request review comment
     */
    public function url(): string
    {
        return $this->url;
    }

    /**
     * The ID of the pull request review to which the comment belongs.
     */
    public function pull_request_review_id(): int
    {
        return $this->pull_request_review_id;
    }

    /**
     * The ID of the pull request review comment.
     */
    public function id(): int
    {
        return $this->id;
    }

    /**
     * The node ID of the pull request review comment.
     */
    public function node_id(): string
    {
        return $this->node_id;
    }

    /**
     * The diff of the line that the comment refers to.
     */
    public function diff_hunk(): string
    {
        return $this->diff_hunk;
    }

    /**
     * The relative path of the file to which the comment applies.
     */
    public function path(): string
    {
        return $this->path;
    }

    /**
     * The line index in the diff to which the comment applies.
     */
    public function position()
    {
        return $this->position;
    }

    /**
     * The index of the original line in the diff to which the comment applies.
     */
    public function original_position(): int
    {
        return $this->original_position;
    }

    /**
     * The SHA of the commit to which the comment applies.
     */
    public function commit_id(): string
    {
        return $this->commit_id;
    }

    /**
     * The SHA of the original commit to which the comment applies.
     */
    public function original_commit_id(): string
    {
        return $this->original_commit_id;
    }

    public function user(): User
    {
        return $this->user;
    }

    /**
     * The text of the comment.
     */
    public function body(): string
    {
        return $this->body;
    }

    public function created_at(): string
    {
        return $this->created_at;
    }

    public function updated_at(): string
    {
        return $this->updated_at;
    }

    /**
     * HTML URL for the pull request review comment.
     */
    public function html_url(): string
    {
        return $this->html_url;
    }

    /**
     * URL for the pull request that the review comment belongs to.
     */
    public function pull_request_url(): string
    {
        return $this->pull_request_url;
    }

    /**
     * How the author is associated with the repository.
     */
    public function author_association(): string
    {
        return $this->author_association;
    }

    public function _links(): array
    {
        return $this->_links;
    }

    /**
     * The first line of the range for a multi-line comment.
     */
    public function start_line()
    {
        return $this->start_line;
    }

    /**
     * The first line of the range for a multi-line comment.
     */
    public function original_start_line()
    {
        return $this->original_start_line;
    }

    /**
     * The side of the first line of the range for a multi-line comment.
     */
    public function start_side()
    {
        return $this->start_side;
    }

    /**
     * The line of the blob to which the comment applies. The last line of the range for a multi-line comment
     */
    public function line()
    {
        return $this->line;
    }

    /**
     * The line of the blob to which the comment applies. The last line of the range for a multi-line comment
     */
    public function original_line(): int
    {
        return $this->original_line;
    }

    /**
     * The side of the first line of the range for a multi-line comment.
     */
    public function side(): string
    {
        return $this->side;
    }

    /**
     * The comment ID to reply to.
     */
    public function in_reply_to_id(): int
    {
        return $this->in_reply_to_id;
    }
}
