<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Schema;

final class NullableSimpleCommit
{
    public const SCHEMA_TITLE = 'Simple Commit';
    public const SCHEMA_DESCRIPTION = 'Simple Commit';
    private string $id;
    private string $tree_id;
    private string $message;
    private string $timestamp;
    private array $author = array();
    private array $committer = array();
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
    public function author() : array
    {
        return $this->author;
    }
    public function committer() : array
    {
        return $this->committer;
    }
}
