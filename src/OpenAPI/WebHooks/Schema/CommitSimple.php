<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\WebHooks\Schema;

final class CommitSimple
{
    public const SCHEMA_TITLE       = 'SimpleCommit';
    public const SCHEMA_DESCRIPTION = '';
    private string $id;
    private string $tree_id;
    private string $message;
    private string $timestamp;
    /**
     * Metaproperties for Git author/committer information.
     *
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\WebHooks\Schema\Committer::class)
     */
    private Committer $author = [];
    /**
     * Metaproperties for Git author/committer information.
     *
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\WebHooks\Schema\Committer::class)
     */
    private Committer $committer = [];

    public function id(): string
    {
        return $this->id;
    }

    public function tree_id(): string
    {
        return $this->tree_id;
    }

    public function message(): string
    {
        return $this->message;
    }

    public function timestamp(): string
    {
        return $this->timestamp;
    }

    /**
     * Metaproperties for Git author/committer information.
     */
    public function author(): Committer
    {
        return $this->author;
    }

    /**
     * Metaproperties for Git author/committer information.
     */
    public function committer(): Committer
    {
        return $this->committer;
    }
}
