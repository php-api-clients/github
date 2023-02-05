<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class SimpleCommit
{
    public const SCHEMA_JSON = '{"title":"Simple Commit","required":["id","tree_id","message","timestamp","author","committer"],"type":"object","properties":{"id":{"type":"string"},"tree_id":{"type":"string"},"message":{"type":"string"},"timestamp":{"type":"string","format":"date-time"},"author":{"required":["name","email"],"type":["object","null"],"properties":{"name":{"type":"string"},"email":{"type":"string"}}},"committer":{"required":["name","email"],"type":["object","null"],"properties":{"name":{"type":"string"},"email":{"type":"string"}}}},"description":"A commit."}';
    public const SCHEMA_TITLE = 'Simple Commit';
    public const SCHEMA_DESCRIPTION = 'A commit.';
    public readonly string $id;
    public readonly string $tree_id;
    public readonly string $message;
    public readonly string $timestamp;
    public readonly ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\SimpleCommit\Author $author;
    public readonly ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\SimpleCommit\Committer $committer;
    public function __construct(string $id, string $tree_id, string $message, string $timestamp, ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\SimpleCommit\Author $author, ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\SimpleCommit\Committer $committer)
    {
        $this->id = $id;
        $this->tree_id = $tree_id;
        $this->message = $message;
        $this->timestamp = $timestamp;
        $this->author = $author;
        $this->committer = $committer;
    }
}
