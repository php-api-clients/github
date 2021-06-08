<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Schema;

final class LegacyReviewComment
{
    public const SCHEMA_TITLE       = 'legacy-review-comment';
    public const SCHEMA_DESCRIPTION = '';
    private string $url;
    private int $pull_request_review_id;
    private int $id;
    private string $node_id;
    private string $diff_hunk;
    private string $path;
    private int $position;
    private int $original_position;
    private string $commit_id;
    private string $original_commit_id;
    private int $in_reply_to_id;
    private array $user = [];
    private string $body;
    private string $created_at;
    private string $updated_at;
    private string $html_url;
    private string $pull_request_url;
    private string $author_association;
    private array $_links = [];

    public function url(): string
    {
        return $this->url;
    }

    public function pull_request_review_id(): int
    {
        return $this->pull_request_review_id;
    }

    public function id(): int
    {
        return $this->id;
    }

    public function node_id(): string
    {
        return $this->node_id;
    }

    public function diff_hunk(): string
    {
        return $this->diff_hunk;
    }

    public function path(): string
    {
        return $this->path;
    }

    public function position(): int
    {
        return $this->position;
    }

    public function original_position(): int
    {
        return $this->original_position;
    }

    public function commit_id(): string
    {
        return $this->commit_id;
    }

    public function original_commit_id(): string
    {
        return $this->original_commit_id;
    }

    public function in_reply_to_id(): int
    {
        return $this->in_reply_to_id;
    }

    public function user(): array
    {
        return $this->user;
    }

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

    public function html_url(): string
    {
        return $this->html_url;
    }

    public function pull_request_url(): string
    {
        return $this->pull_request_url;
    }

    public function author_association(): string
    {
        return $this->author_association;
    }

    public function _links(): array
    {
        return $this->_links;
    }
}
