<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WebhookPush;

final class HeadCommit
{
    public const SCHEMA_JSON = '{"title":"Commit","required":["id","tree_id","distinct","message","timestamp","url","author","committer"],"type":["object","null"],"properties":{"added":{"type":"array","items":{"type":"string"},"description":"An array of files added in the commit."},"author":{"title":"Committer","required":["email","name"],"type":"object","properties":{"date":{"type":"string","format":"date-time"},"email":{"type":["string","null"],"format":"email"},"name":{"type":"string","description":"The git author\'s name."},"username":{"type":"string"}},"description":"Metaproperties for Git author\\/committer information."},"committer":{"title":"Committer","required":["email","name"],"type":"object","properties":{"date":{"type":"string","format":"date-time"},"email":{"type":["string","null"],"format":"email"},"name":{"type":"string","description":"The git author\'s name."},"username":{"type":"string"}},"description":"Metaproperties for Git author\\/committer information."},"distinct":{"type":"boolean","description":"Whether this commit is distinct from any that have been pushed before."},"id":{"type":"string"},"message":{"type":"string","description":"The commit message."},"modified":{"type":"array","items":{"type":"string"},"description":"An array of files modified by the commit."},"removed":{"type":"array","items":{"type":"string"},"description":"An array of files removed in the commit."},"timestamp":{"type":"string","description":"The ISO 8601 timestamp of the commit.","format":"date-time"},"tree_id":{"type":"string"},"url":{"type":"string","description":"URL that points to the commit API resource.","format":"uri"}}}';
    public const SCHEMA_EXAMPLE = '[]';
    public const SCHEMA_TITLE = 'Commit';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * An array of files added in the commit.
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\HeadCommit\Added>
     */
    public readonly array $added;
    /**
     * Metaproperties for Git author/committer information.
     */
    public readonly \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\HeadCommit\Author $author;
    /**
     * Metaproperties for Git author/committer information.
     */
    public readonly \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\HeadCommit\Committer $committer;
    /**
     * Whether this commit is distinct from any that have been pushed before.
     */
    public readonly bool $distinct;
    public readonly string $id;
    /**
     * The commit message.
     */
    public readonly string $message;
    /**
     * An array of files modified by the commit.
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\HeadCommit\Modified>
     */
    public readonly array $modified;
    /**
     * An array of files removed in the commit.
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\HeadCommit\Removed>
     */
    public readonly array $removed;
    /**
     * The ISO 8601 timestamp of the commit.
     */
    public readonly string $timestamp;
    public readonly string $tree_id;
    /**
     * URL that points to the commit API resource.
     */
    public readonly string $url;
    /**
     * @param array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\HeadCommit\Added> $added
     * @param array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\HeadCommit\Modified> $modified
     * @param array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\HeadCommit\Removed> $removed
     */
    public function __construct(array $added, \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\HeadCommit\Author $author, \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\HeadCommit\Committer $committer, bool $distinct, string $id, string $message, array $modified, array $removed, string $timestamp, string $tree_id, string $url)
    {
        $this->added = $added;
        $this->author = $author;
        $this->committer = $committer;
        $this->distinct = $distinct;
        $this->id = $id;
        $this->message = $message;
        $this->modified = $modified;
        $this->removed = $removed;
        $this->timestamp = $timestamp;
        $this->tree_id = $tree_id;
        $this->url = $url;
    }
}
