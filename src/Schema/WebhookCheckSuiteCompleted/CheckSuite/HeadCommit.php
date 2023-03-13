<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\WebhookCheckSuiteCompleted\CheckSuite;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class HeadCommit
{
    public const SCHEMA_JSON = '{"title":"SimpleCommit","required":["id","tree_id","message","timestamp","author","committer"],"type":"object","properties":{"author":{"title":"Committer","required":["email","name"],"type":"object","properties":{"date":{"type":"string","format":"date-time"},"email":{"type":["string","null"],"format":"email"},"name":{"type":"string","description":"The git author\'s name."},"username":{"type":"string"}},"description":"Metaproperties for Git author\\/committer information."},"committer":{"title":"Committer","required":["email","name"],"type":"object","properties":{"date":{"type":"string","format":"date-time"},"email":{"type":["string","null"],"format":"email"},"name":{"type":"string","description":"The git author\'s name."},"username":{"type":"string"}},"description":"Metaproperties for Git author\\/committer information."},"id":{"type":"string"},"message":{"type":"string"},"timestamp":{"type":"string"},"tree_id":{"type":"string"}}}';
    public const SCHEMA_TITLE = 'SimpleCommit';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"author":{"date":"generated_date","email":"generated_email","name":"generated_name","username":"generated_username"},"committer":{"date":"generated_date","email":"generated_email","name":"generated_name","username":"generated_username"},"id":"generated_id","message":"generated_message","timestamp":"generated_timestamp","tree_id":"generated_tree_id"}';
    /**
     * author: Metaproperties for Git author/committer information.
     * committer: Metaproperties for Git author/committer information.
     */
    public function __construct(public Schema\WebhookCheckSuiteCompleted\CheckSuite\HeadCommit\Author $author, public Schema\WebhookCheckSuiteCompleted\CheckSuite\HeadCommit\Author $committer, public string $id, public string $message, public string $timestamp, public string $tree_id)
    {
    }
}
