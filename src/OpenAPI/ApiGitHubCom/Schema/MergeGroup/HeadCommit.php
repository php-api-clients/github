<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\MergeGroup;

final class HeadCommit
{
    public const SCHEMA_JSON = '{"title":"SimpleCommit","required":["id","tree_id","message","timestamp","author","committer"],"type":"object","properties":{"author":{"title":"Committer","required":["email","name"],"type":"object","properties":{"date":{"type":"string","format":"date-time"},"email":{"type":["string","null"],"format":"email"},"name":{"type":"string","description":"The git author\'s name."},"username":{"type":"string"}},"description":"Metaproperties for Git author\\/committer information."},"committer":{"title":"Committer","required":["email","name"],"type":"object","properties":{"date":{"type":"string","format":"date-time"},"email":{"type":["string","null"],"format":"email"},"name":{"type":"string","description":"The git author\'s name."},"username":{"type":"string"}},"description":"Metaproperties for Git author\\/committer information."},"id":{"type":"string"},"message":{"type":"string"},"timestamp":{"type":"string"},"tree_id":{"type":"string"}}}';
    public const SCHEMA_EXAMPLE = '[]';
    public const SCHEMA_TITLE = 'SimpleCommit';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * Metaproperties for Git author/committer information.
     */
    public readonly \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\HeadCommit\Author $author;
    /**
     * Metaproperties for Git author/committer information.
     */
    public readonly \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\HeadCommit\Committer $committer;
    public readonly string $id;
    public readonly string $message;
    public readonly string $timestamp;
    public readonly string $tree_id;
    public function __construct(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\HeadCommit\Author $author, \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\HeadCommit\Committer $committer, string $id, string $message, string $timestamp, string $tree_id)
    {
        $this->author = $author;
        $this->committer = $committer;
        $this->id = $id;
        $this->message = $message;
        $this->timestamp = $timestamp;
        $this->tree_id = $tree_id;
    }
}
