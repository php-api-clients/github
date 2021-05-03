<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Schema;

final class SimpleCommit
{
    public const SCHEMA_TITLE = 'Simple Commit';
    public const SPL_HASH = '000000002eab666500000000697c5254';
    public const SCHEMA_DESCRIPTION = 'Simple Commit';
    private string $id;
    private string $tree_id;
    private string $message;
    private string $timestamp;
    private object $author;
    private object $committer;
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
    public function author() : object
    {
        return $this->author;
    }
    public function committer() : object
    {
        return $this->committer;
    }
}
