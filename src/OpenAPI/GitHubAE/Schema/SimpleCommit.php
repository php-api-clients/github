<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema;

final class SimpleCommit
{
    public const SCHEMA_TITLE = 'Simple Commit';
    public const SCHEMA_DESCRIPTION = 'A commit.';
    private string $id;
    private string $tree_id;
    private string $message;
    private string $timestamp;
    private $author;
    private $committer;
    public function id() : string
    {
        return $this->id;
    }
    public function tree_id() : string
    {
        return $this->tree_id;
    }
    public function message() : string
    {
        return $this->message;
    }
    public function timestamp() : string
    {
        return $this->timestamp;
    }
    public function author()
    {
        return $this->author;
    }
    public function committer()
    {
        return $this->committer;
    }
}
