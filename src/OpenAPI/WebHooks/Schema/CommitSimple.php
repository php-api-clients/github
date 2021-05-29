<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\WebHooks\Schema;

final class CommitSimple
{
    public const SCHEMA_TITLE       = 'SimpleCommit';
    public const SCHEMA_DESCRIPTION = '';
    private ?string $id             = null;
    private ?string $tree_id        = null;
    private ?string $message        = null;
    private ?string $timestamp      = null;
    /**
     * Metaproperties for Git author/committer information.
     */
    private array $author = [];
    /**
     * Metaproperties for Git author/committer information.
     */
    private array $committer = [];

    public function id(): ?string
    {
        return $this->id;
    }

    public function tree_id(): ?string
    {
        return $this->tree_id;
    }

    public function message(): ?string
    {
        return $this->message;
    }

    public function timestamp(): ?string
    {
        return $this->timestamp;
    }

    public function author(): array
    {
        return $this->author;
    }

    public function committer(): array
    {
        return $this->committer;
    }
}
