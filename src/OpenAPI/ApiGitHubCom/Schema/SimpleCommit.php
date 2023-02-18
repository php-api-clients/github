<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\SimpleCommit\Author;

final readonly class SimpleCommit
{
    public const SCHEMA_JSON        = '{"title":"Simple Commit","required":["id","tree_id","message","timestamp","author","committer"],"type":"object","properties":{"id":{"type":"string"},"tree_id":{"type":"string"},"message":{"type":"string"},"timestamp":{"type":"string","format":"date-time"},"author":{"required":["name","email"],"type":["object","null"],"properties":{"name":{"type":"string"},"email":{"type":"string"}}},"committer":{"required":["name","email"],"type":["object","null"],"properties":{"name":{"type":"string"},"email":{"type":"string"}}}},"description":"A commit."}';
    public const SCHEMA_TITLE       = 'Simple Commit';
    public const SCHEMA_DESCRIPTION = 'A commit.';
    public ?string $id;
    public ?string $tree_id;
    public ?string $message;
    public ?string $timestamp;
    public ?Author $author;
    public ?Author $committer;

    public function __construct(string $id, string $tree_id, string $message, string $timestamp, Author $author, Author $committer)
    {
        $this->id        = $id;
        $this->tree_id   = $tree_id;
        $this->message   = $message;
        $this->timestamp = $timestamp;
        $this->author    = $author;
        $this->committer = $committer;
    }
}
