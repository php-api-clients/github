<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\WebHooks\Schema;

final class Commit
{
    public const SCHEMA_TITLE       = 'Commit';
    public const SCHEMA_DESCRIPTION = '';
    private ?string $id             = null;
    private ?string $tree_id        = null;
    /**
     * Whether this commit is distinct from any that have been pushed before.
     */
    private ?bool $distinct = null;
    /**
     * The commit message.
     */
    private ?string $message = null;
    /**
     * The ISO 8601 timestamp of the commit.
     */
    private ?string $timestamp = null;
    /**
     * URL that points to the commit API resource.
     */
    private ?string $url = null;
    /**
     * Metaproperties for Git author/committer information.
     *
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\WebHooks\Schema\Committer::class)
     */
    private ?Committer $author = null;
    /**
     * Metaproperties for Git author/committer information.
     *
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\WebHooks\Schema\Committer::class)
     */
    private ?Committer $committer = null;
    /**
     * An array of files added in the commit.
     */
    private array $added = [];
    /**
     * An array of files modified by the commit.
     */
    private array $removed = [];
    /**
     * An array of files removed in the commit.
     */
    private array $modified = [];

    public function id(): ?string
    {
        return $this->id;
    }

    public function tree_id(): ?string
    {
        return $this->tree_id;
    }

    public function distinct(): ?bool
    {
        return $this->distinct;
    }

    public function message(): ?string
    {
        return $this->message;
    }

    public function timestamp(): ?string
    {
        return $this->timestamp;
    }

    public function url(): ?string
    {
        return $this->url;
    }

    public function author(): ?Committer
    {
        return $this->author;
    }

    public function committer(): ?Committer
    {
        return $this->committer;
    }

    public function added(): array
    {
        return $this->added;
    }

    public function removed(): array
    {
        return $this->removed;
    }

    public function modified(): array
    {
        return $this->modified;
    }
}
