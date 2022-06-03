<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Schema;

final class ReviewComment
{
    public const SCHEMA_TITLE = 'Legacy Review Comment';
    public const SCHEMA_DESCRIPTION = 'Legacy Review Comment';
    private string $url;
    private ?int $pull_request_review_id = null;
    private int $id;
    private string $node_id;
    private string $diff_hunk;
    private string $path;
    private ?int $position = null;
    private int $original_position;
    private string $commit_id;
    private string $original_commit_id;
    private ?int $in_reply_to_id = null;
    /**
     * Simple User
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Schema\NullableSimpleUser::class)
     */
    private ?\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Schema\NullableSimpleUser $user = null;
    private string $body;
    private string $created_at;
    private string $updated_at;
    private string $html_url;
    private string $pull_request_url;
    /**
     * How the author is associated with the repository.
     */
    private string $author_association;
    private array $_links = array();
    private ?string $body_text = null;
    private ?string $body_html = null;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Schema\ReactionRollup::class)
     */
    private ?\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Schema\ReactionRollup $reactions = null;
    /**
     * The side of the first line of the range for a multi-line comment.
     */
    private ?string $side = null;
    /**
     * The side of the first line of the range for a multi-line comment.
     */
    private ?string $start_side = null;
    /**
     * The line of the blob to which the comment applies. The last line of the range for a multi-line comment
     */
    private ?int $line = null;
    /**
     * The original line of the blob to which the comment applies. The last line of the range for a multi-line comment
     */
    private ?int $original_line = null;
    /**
     * The first line of the range for a multi-line comment.
     */
    private ?int $start_line = null;
    /**
     * The original first line of the range for a multi-line comment.
     */
    private ?int $original_start_line = null;
    public function url() : string
    {
        return $this->url;
    }
    public function pull_request_review_id() : ?int
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
    public function position() : ?int
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
    public function in_reply_to_id() : ?int
    {
        return $this->in_reply_to_id;
    }
    /**
     * Simple User
     */
    public function user() : ?\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Schema\NullableSimpleUser
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
    /**
     * How the author is associated with the repository.
     */
    public function author_association() : string
    {
        return $this->author_association;
    }
    public function _links() : array
    {
        return $this->_links;
    }
    public function body_text() : ?string
    {
        return $this->body_text;
    }
    public function body_html() : ?string
    {
        return $this->body_html;
    }
    public function reactions() : ?\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Schema\ReactionRollup
    {
        return $this->reactions;
    }
    /**
     * The side of the first line of the range for a multi-line comment.
     */
    public function side() : ?string
    {
        return $this->side;
    }
    /**
     * The side of the first line of the range for a multi-line comment.
     */
    public function start_side() : ?string
    {
        return $this->start_side;
    }
    /**
     * The line of the blob to which the comment applies. The last line of the range for a multi-line comment
     */
    public function line() : ?int
    {
        return $this->line;
    }
    /**
     * The original line of the blob to which the comment applies. The last line of the range for a multi-line comment
     */
    public function original_line() : ?int
    {
        return $this->original_line;
    }
    /**
     * The first line of the range for a multi-line comment.
     */
    public function start_line() : ?int
    {
        return $this->start_line;
    }
    /**
     * The original first line of the range for a multi-line comment.
     */
    public function original_start_line() : ?int
    {
        return $this->original_start_line;
    }
}
