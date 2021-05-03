<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class SimpleCommit
{
    public const SCHEMA_TITLE = 'Simple Commit';
    public const SPL_HASH = '000000000cd53e680000000040effa88';
    public const SCHEMA_DESCRIPTION = 'Simple Commit';
    private ?string $id = null;
    private ?string $tree_id = null;
    private ?string $message = null;
    private ?string $timestamp = null;
    private ?object $author = null;
    private ?object $committer = null;
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
    public function author() : ?object
    {
        return $this->author;
    }
    public function committer() : ?object
    {
        return $this->committer;
    }
}
