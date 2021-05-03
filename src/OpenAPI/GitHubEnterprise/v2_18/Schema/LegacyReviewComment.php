<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Schema;

final class LegacyReviewComment
{
    public const SCHEMA_TITLE = 'legacy-review-comment';
    public const SPL_HASH = '00000000577b2e3d0000000061bd81a4';
    public const SCHEMA_DESCRIPTION = '';
    private ?string $url = null;
    private ?int $pull_request_review_id = null;
    private ?int $id = null;
    private ?string $node_id = null;
    private ?string $diff_hunk = null;
    private ?string $path = null;
    private ?int $position = null;
    private ?int $original_position = null;
    private ?string $commit_id = null;
    private ?string $original_commit_id = null;
    private ?int $in_reply_to_id = null;
    private ?object $user = null;
    private ?string $body = null;
    private ?string $created_at = null;
    private ?string $updated_at = null;
    private ?string $html_url = null;
    private ?string $pull_request_url = null;
    private ?string $author_association = null;
    private ?object $_links = null;
    public function url() : ?string
    {
        return $this->url;
    }
    public function pull_request_review_id() : ?int
    {
        return $this->pull_request_review_id;
    }
    public function id() : ?int
    {
        return $this->id;
    }
    public function node_id() : ?string
    {
        return $this->node_id;
    }
    public function diff_hunk() : ?string
    {
        return $this->diff_hunk;
    }
    public function path() : ?string
    {
        return $this->path;
    }
    public function position() : ?int
    {
        return $this->position;
    }
    public function original_position() : ?int
    {
        return $this->original_position;
    }
    public function commit_id() : ?string
    {
        return $this->commit_id;
    }
    public function original_commit_id() : ?string
    {
        return $this->original_commit_id;
    }
    public function in_reply_to_id() : ?int
    {
        return $this->in_reply_to_id;
    }
    public function user() : ?object
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
    public function html_url() : ?string
    {
        return $this->html_url;
    }
    public function pull_request_url() : ?string
    {
        return $this->pull_request_url;
    }
    public function author_association() : ?string
    {
        return $this->author_association;
    }
    public function _links() : ?object
    {
        return $this->_links;
    }
}
