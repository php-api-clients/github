<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\WebhookPush;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class Commits
{
    public const SCHEMA_JSON = '{"title":"Commit","required":["id","tree_id","distinct","message","timestamp","url","author","committer"],"type":"object","properties":{"added":{"type":"array","items":{"type":"string"},"description":"An array of files added in the commit."},"author":{"title":"Committer","required":["email","name"],"type":"object","properties":{"date":{"type":"string","format":"date-time"},"email":{"type":["string","null"],"format":"email"},"name":{"type":"string","description":"The git author\'s name."},"username":{"type":"string"}},"description":"Metaproperties for Git author\\/committer information."},"committer":{"title":"Committer","required":["email","name"],"type":"object","properties":{"date":{"type":"string","format":"date-time"},"email":{"type":["string","null"],"format":"email"},"name":{"type":"string","description":"The git author\'s name."},"username":{"type":"string"}},"description":"Metaproperties for Git author\\/committer information."},"distinct":{"type":"boolean","description":"Whether this commit is distinct from any that have been pushed before."},"id":{"type":"string"},"message":{"type":"string","description":"The commit message."},"modified":{"type":"array","items":{"type":"string"},"description":"An array of files modified by the commit."},"removed":{"type":"array","items":{"type":"string"},"description":"An array of files removed in the commit."},"timestamp":{"type":"string","description":"The ISO 8601 timestamp of the commit.","format":"date-time"},"tree_id":{"type":"string"},"url":{"type":"string","description":"URL that points to the commit API resource.","format":"uri"}}}';
    public const SCHEMA_TITLE = 'Commit';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"added":["generated_added"],"author":{"date":"generated_date","email":"generated_email","name":"generated_name","username":"generated_username"},"committer":{"date":"generated_date","email":"generated_email","name":"generated_name","username":"generated_username"},"distinct":false,"id":"generated_id","message":"generated_message","modified":["generated_modified"],"removed":["generated_removed"],"timestamp":"generated_timestamp","tree_id":"generated_tree_id","url":"generated_url"}';
    /**
     * added: An array of files added in the commit.
     * @param ?array<string> $added
     * author: Metaproperties for Git author/committer information.
     * committer: Metaproperties for Git author/committer information.
     * distinct: Whether this commit is distinct from any that have been pushed before.
     * message: The commit message.
     * modified: An array of files modified by the commit.
     * @param ?array<string> $modified
     * removed: An array of files removed in the commit.
     * @param ?array<string> $removed
     * timestamp: The ISO 8601 timestamp of the commit.
     * url: URL that points to the commit API resource.
     */
    public function __construct(public ?array $added, public Schema\WebhookCheckSuiteCompleted\CheckSuite\HeadCommit\Author $author, public Schema\WebhookCheckSuiteCompleted\CheckSuite\HeadCommit\Author $committer, public bool $distinct, public string $id, public string $message, public ?array $modified, public ?array $removed, public string $timestamp, public string $tree_id, public string $url)
    {
    }
}
