<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WorkflowRun;

final class HeadCommit
{
    public const SCHEMA_JSON = '{"title":"SimpleCommit","required":["id","tree_id","message","timestamp","author","committer"],"type":"object","properties":{"author":{"title":"Committer","required":["email","name"],"type":"object","properties":{"date":{"type":"string","format":"date-time"},"email":{"type":["string","null"],"format":"email"},"name":{"type":"string","description":"The git author\'s name."},"username":{"type":"string"}},"description":"Metaproperties for Git author\\/committer information."},"committer":{"title":"Committer","required":["email","name"],"type":"object","properties":{"date":{"type":"string","format":"date-time"},"email":{"type":["string","null"],"format":"email"},"name":{"type":"string","description":"The git author\'s name."},"username":{"type":"string"}},"description":"Metaproperties for Git author\\/committer information."},"id":{"type":"string"},"message":{"type":"string"},"timestamp":{"type":"string"},"tree_id":{"type":"string"}}}';
    public const SCHEMA_TITLE = 'SimpleCommit';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * Metaproperties for Git author/committer information.
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\HeadCommit\Author::class)
     */
    private \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\HeadCommit\Author $author;
    /**
     * Metaproperties for Git author/committer information.
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\HeadCommit\Committer::class)
     */
    private \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\HeadCommit\Committer $committer;
    private string $id;
    private string $message;
    private string $timestamp;
    private string $tree_id;
    /**
     * Metaproperties for Git author/committer information.
     */
    public function author() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\HeadCommit\Author
    {
        return $this->author;
    }
    /**
     * Metaproperties for Git author/committer information.
     */
    public function committer() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\HeadCommit\Committer
    {
        return $this->committer;
    }
    public function id() : string
    {
        return $this->id;
    }
    public function message() : string
    {
        return $this->message;
    }
    public function timestamp() : string
    {
        return $this->timestamp;
    }
    public function tree_id() : string
    {
        return $this->tree_id;
    }
}
