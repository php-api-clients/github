<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Schema;

final class CommitComment
{
    public const SCHEMA_TITLE       = 'Commit Comment';
    public const SCHEMA_DESCRIPTION = 'Commit Comment';
    private string $html_url;
    private string $url;
    private int $id;
    private string $node_id;
    private string $body;
    private string $path;
    private int $position;
    private int $line;
    private string $commit_id;
    private $user;
    private string $created_at;
    private string $updated_at;
    /**
     * How the author is associated with the repository.
     */
    private string $author_association;
    /** @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Schema\ReactionRollup::class) */
    private ReactionRollup $reactions;

    public function html_url(): string
    {
        return $this->html_url;
    }

    public function url(): string
    {
        return $this->url;
    }

    public function id(): int
    {
        return $this->id;
    }

    public function node_id(): string
    {
        return $this->node_id;
    }

    public function body(): string
    {
        return $this->body;
    }

    public function path(): string
    {
        return $this->path;
    }

    public function position(): int
    {
        return $this->position;
    }

    public function line(): int
    {
        return $this->line;
    }

    public function commit_id(): string
    {
        return $this->commit_id;
    }

    public function user()
    {
        return $this->user;
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
     * How the author is associated with the repository.
     */
    public function author_association(): string
    {
        return $this->author_association;
    }

    public function reactions(): ReactionRollup
    {
        return $this->reactions;
    }
}
