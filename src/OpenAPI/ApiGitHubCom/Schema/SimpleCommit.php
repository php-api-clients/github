<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class SimpleCommit
{
    public const SCHEMA_TITLE = 'Simple Commit';
    public const SCHEMA_DESCRIPTION = 'Simple Commit';
    private ?string $id = null;
    private ?string $tree_id = null;
    private ?string $message = null;
    private ?string $timestamp = null;
    private array $author = array();
    private array $committer = array();
    public function id() : ?string
    {
        return $this->id;
    }
    public function tree_id() : ?string
    {
        return $this->tree_id;
    }
    public function message() : ?string
    {
        return $this->message;
    }
    public function timestamp() : ?string
    {
        return $this->timestamp;
    }
    public function author() : array
    {
        return $this->author;
    }
    public function committer() : array
    {
        return $this->committer;
    }
}
