<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\WebhookPush;

final class Commits
{
    public const SCHEMA_TITLE = 'Commit';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * An array of files added in the commit.
     */
    private array $added = array();
    /**
     * Metaproperties for Git author/committer information.
     */
    private array $author = array();
    /**
     * Metaproperties for Git author/committer information.
     */
    private array $committer = array();
    /**
     * Whether this commit is distinct from any that have been pushed before.
     */
    private bool $distinct;
    private string $id;
    /**
     * The commit message.
     */
    private string $message;
    /**
     * An array of files modified by the commit.
     */
    private array $modified = array();
    /**
     * An array of files removed in the commit.
     */
    private array $removed = array();
    /**
     * The ISO 8601 timestamp of the commit.
     */
    private string $timestamp;
    private string $tree_id;
    /**
     * URL that points to the commit API resource.
     */
    private string $url;
    /**
     * An array of files added in the commit.
     */
    public function added() : array
    {
        return $this->added;
    }
    /**
     * Metaproperties for Git author/committer information.
     */
    public function author() : array
    {
        return $this->author;
    }
    /**
     * Metaproperties for Git author/committer information.
     */
    public function committer() : array
    {
        return $this->committer;
    }
    /**
     * Whether this commit is distinct from any that have been pushed before.
     */
    public function distinct() : bool
    {
        return $this->distinct;
    }
    public function id() : string
    {
        return $this->id;
    }
    /**
     * The commit message.
     */
    public function message() : string
    {
        return $this->message;
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
    /**
     * The ISO 8601 timestamp of the commit.
     */
    public function timestamp() : string
    {
        return $this->timestamp;
    }
    public function tree_id() : string
    {
        return $this->tree_id;
    }
    /**
     * URL that points to the commit API resource.
     */
    public function url() : string
    {
        return $this->url;
    }
}
