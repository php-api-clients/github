<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\WebhookPush;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class HeadCommit
{
    public const SCHEMA_JSON = '{"title":"Commit","required":["id","tree_id","distinct","message","timestamp","url","author","committer"],"type":["object","null"],"properties":{"added":{"type":"array","items":{"type":"string"},"description":"An array of files added in the commit."},"author":{"title":"Committer","required":["email","name"],"type":"object","properties":{"date":{"type":"string","format":"date-time"},"email":{"type":["string","null"],"format":"email"},"name":{"type":"string","description":"The git author\'s name."},"username":{"type":"string"}},"description":"Metaproperties for Git author\\/committer information."},"committer":{"title":"Committer","required":["email","name"],"type":"object","properties":{"date":{"type":"string","format":"date-time"},"email":{"type":["string","null"],"format":"email"},"name":{"type":"string","description":"The git author\'s name."},"username":{"type":"string"}},"description":"Metaproperties for Git author\\/committer information."},"distinct":{"type":"boolean","description":"Whether this commit is distinct from any that have been pushed before."},"id":{"type":"string"},"message":{"type":"string","description":"The commit message."},"modified":{"type":"array","items":{"type":"string"},"description":"An array of files modified by the commit."},"removed":{"type":"array","items":{"type":"string"},"description":"An array of files removed in the commit."},"timestamp":{"type":"string","description":"The ISO 8601 timestamp of the commit.","format":"date-time"},"tree_id":{"type":"string"},"url":{"type":"string","description":"URL that points to the commit API resource.","format":"uri"}}}';
    public const SCHEMA_TITLE = 'Commit';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"added":["generated_added_null"],"author":{"date":"1970-01-01T00:00:00+00:00","email":"generated_email_email","name":"generated_name_null","username":"generated_username_null"},"committer":{"date":"1970-01-01T00:00:00+00:00","email":"generated_email_email","name":"generated_name_null","username":"generated_username_null"},"distinct":false,"id":"generated_id_null","message":"generated_message_null","modified":["generated_modified_null"],"removed":["generated_removed_null"],"timestamp":"1970-01-01T00:00:00+00:00","tree_id":"generated_tree_id_null","url":"https:\\/\\/example.com\\/"}';
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
