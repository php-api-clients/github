<?php

namespace ApiClients\Client\Github\OpenAPI\WebHooks\Schema;

final class Commit
{
    public const SCHEMA_TITLE = 'Commit';
    public const SCHEMA_DESCRIPTION = '';
    private string $id;
    private string $tree_id;
    /**
     * Whether this commit is distinct from any that have been pushed before.
     */
    private bool $distinct;
    /**
     * The commit message.
     */
    private string $message;
    /**
     * The ISO 8601 timestamp of the commit.
     */
    private string $timestamp;
    /**
     * URL that points to the commit API resource.
     */
    private string $url;
    /**
     * Metaproperties for Git author/committer information.
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\WebHooks\Schema\Committer::class)
     */
    private \ApiClients\Client\Github\OpenAPI\WebHooks\Schema\Committer $author;
    /**
     * Metaproperties for Git author/committer information.
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\WebHooks\Schema\Committer::class)
     */
    private \ApiClients\Client\Github\OpenAPI\WebHooks\Schema\Committer $committer;
    /**
     * An array of files added in the commit.
     */
    private array $added = array();
    /**
     * An array of files modified by the commit.
     */
    private array $modified = array();
    /**
     * An array of files removed in the commit.
     */
    private array $removed = array();
    public function id() : string
    {
        return $this->id;
    }
    public function tree_id() : string
    {
        return $this->tree_id;
    }
    /**
     * Whether this commit is distinct from any that have been pushed before.
     */
    public function distinct() : bool
    {
        return $this->distinct;
    }
    /**
     * The commit message.
     */
    public function message() : string
    {
        return $this->message;
    }
    /**
     * The ISO 8601 timestamp of the commit.
     */
    public function timestamp() : string
    {
        return $this->timestamp;
    }
    /**
     * URL that points to the commit API resource.
     */
    public function url() : string
    {
        return $this->url;
    }
    /**
     * Metaproperties for Git author/committer information.
     */
    public function author() : \ApiClients\Client\Github\OpenAPI\WebHooks\Schema\Committer
    {
        return $this->author;
    }
    /**
     * Metaproperties for Git author/committer information.
     */
    public function committer() : \ApiClients\Client\Github\OpenAPI\WebHooks\Schema\Committer
    {
        return $this->committer;
    }
    /**
     * An array of files added in the commit.
     */
    public function added() : array
    {
        return $this->added;
    }
    /**
     * An array of files modified by the commit.
     */
    public function modified() : array
    {
        return $this->modified;
    }
    /**
     * An array of files removed in the commit.
     */
    public function removed() : array
    {
        return $this->removed;
    }
}
