<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Schema;

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
     *
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Schema\SimpleUser::class)
     */
    private ?SimpleUser $user = null;
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
    /** @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Schema\ReactionRollup::class) */
    private ?ReactionRollup $reactions = null;
    private ?string $body_html         = null;
    private ?string $body_text         = null;

    /**
     * URL for the pull request review comment
     */
    public function url(): ?string
    {
        return $this->url;
    }

    /**
     * The ID of the pull request review to which the comment belongs.
     */
    public function pull_request_review_id(): ?int
    {
        return $this->pull_request_review_id;
    }

    /**
     * The ID of the pull request review comment.
     */
    public function id(): ?int
    {
        return $this->id;
    }

    /**
     * The node ID of the pull request review comment.
     */
    public function node_id(): ?string
    {
        return $this->node_id;
    }

    /**
     * The diff of the line that the comment refers to.
     */
    public function diff_hunk(): ?string
    {
        return $this->diff_hunk;
    }

    /**
     * The relative path of the file to which the comment applies.
     */
    public function path(): ?string
    {
        return $this->path;
    }

    /**
     * The line index in the diff to which the comment applies.
     */
    public function position(): ?int
    {
        return $this->position;
    }

    /**
     * The index of the original line in the diff to which the comment applies.
     */
    public function original_position(): ?int
    {
        return $this->original_position;
    }

    /**
     * The SHA of the commit to which the comment applies.
     */
    public function commit_id(): ?string
    {
        return $this->commit_id;
    }

    /**
     * The SHA of the original commit to which the comment applies.
     */
    public function original_commit_id(): ?string
    {
        return $this->original_commit_id;
    }

    /**
     * The comment ID to reply to.
     */
    public function in_reply_to_id(): ?int
    {
        return $this->in_reply_to_id;
    }

    /**
     * Simple User
     */
    public function user(): ?SimpleUser
    {
        return $this->user;
    }

    /**
     * The text of the comment.
     */
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

    /**
     * HTML URL for the pull request review comment.
     */
    public function html_url(): ?string
    {
        return $this->html_url;
    }

    /**
     * URL for the pull request that the review comment belongs to.
     */
    public function pull_request_url(): ?string
    {
        return $this->pull_request_url;
    }

    /**
     * How the author is associated with the repository.
     */
    public function author_association(): ?string
    {
        return $this->author_association;
    }

    public function _links(): array
    {
        return $this->_links;
    }

    public function reactions(): ?ReactionRollup
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
