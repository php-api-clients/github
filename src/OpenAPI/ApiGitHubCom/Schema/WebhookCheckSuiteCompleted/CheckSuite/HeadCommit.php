<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WebhookCheckSuiteCompleted\CheckSuite;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WebhookCheckSuiteCompleted\CheckSuite\HeadCommit\Author;

final readonly class HeadCommit
{
    public const SCHEMA_JSON        = '{"title":"SimpleCommit","required":["id","tree_id","message","timestamp","author","committer"],"type":"object","properties":{"author":{"title":"Committer","required":["email","name"],"type":"object","properties":{"date":{"type":"string","format":"date-time"},"email":{"type":["string","null"],"format":"email"},"name":{"type":"string","description":"The git author\'s name."},"username":{"type":"string"}},"description":"Metaproperties for Git author\\/committer information."},"committer":{"title":"Committer","required":["email","name"],"type":"object","properties":{"date":{"type":"string","format":"date-time"},"email":{"type":["string","null"],"format":"email"},"name":{"type":"string","description":"The git author\'s name."},"username":{"type":"string"}},"description":"Metaproperties for Git author\\/committer information."},"id":{"type":"string"},"message":{"type":"string"},"timestamp":{"type":"string"},"tree_id":{"type":"string"}}}';
    public const SCHEMA_TITLE       = 'SimpleCommit';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * Metaproperties for Git author/committer information.
     */
    public ?Author $author;
    /**
     * Metaproperties for Git author/committer information.
     */
    public ?Author $committer;
    public ?string $id;
    public ?string $message;
    public ?string $timestamp;
    public ?string $tree_id;

    public function __construct(Author $author, Author $committer, string $id, string $message, string $timestamp, string $tree_id)
    {
        $this->author    = $author;
        $this->committer = $committer;
        $this->id        = $id;
        $this->message   = $message;
        $this->timestamp = $timestamp;
        $this->tree_id   = $tree_id;
    }
}
