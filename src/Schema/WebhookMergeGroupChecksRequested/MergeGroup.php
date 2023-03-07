<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\WebhookMergeGroupChecksRequested;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class MergeGroup
{
    public const SCHEMA_JSON = '{"title":"MergeGroup","required":["head_sha","head_ref","base_sha","base_ref","head_commit"],"type":"object","properties":{"head_sha":{"type":"string","description":"The SHA of the merge group."},"head_ref":{"type":"string","description":"The full ref of the merge group."},"base_sha":{"type":"string","description":"The SHA of the merge group\'s parent commit."},"base_ref":{"type":"string","description":"The full ref of the branch the merge group will be merged into."},"head_commit":{"title":"SimpleCommit","required":["id","tree_id","message","timestamp","author","committer"],"type":"object","properties":{"author":{"title":"Committer","required":["email","name"],"type":"object","properties":{"date":{"type":"string","format":"date-time"},"email":{"type":["string","null"],"format":"email"},"name":{"type":"string","description":"The git author\'s name."},"username":{"type":"string"}},"description":"Metaproperties for Git author\\/committer information."},"committer":{"title":"Committer","required":["email","name"],"type":"object","properties":{"date":{"type":"string","format":"date-time"},"email":{"type":["string","null"],"format":"email"},"name":{"type":"string","description":"The git author\'s name."},"username":{"type":"string"}},"description":"Metaproperties for Git author\\/committer information."},"id":{"type":"string"},"message":{"type":"string"},"timestamp":{"type":"string"},"tree_id":{"type":"string"}}}}}';
    public const SCHEMA_TITLE = 'MergeGroup';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"head_sha":"generated_head_sha","head_ref":"generated_head_ref","base_sha":"generated_base_sha","base_ref":"generated_base_ref","head_commit":{"author":{"date":"generated_date","email":"generated_email","name":"generated_name","username":"generated_username"},"committer":{"date":"generated_date","email":"generated_email","name":"generated_name","username":"generated_username"},"id":"generated_id","message":"generated_message","timestamp":"generated_timestamp","tree_id":"generated_tree_id"}}';
    /**
     * head_sha: The SHA of the merge group.
     * head_ref: The full ref of the merge group.
     * base_sha: The SHA of the merge group's parent commit.
     * base_ref: The full ref of the branch the merge group will be merged into.
     */
    public function __construct(public ?string $head_sha, public ?string $head_ref, public ?string $base_sha, public ?string $base_ref, public ?Schema\WebhookCheckSuiteCompleted\CheckSuite\HeadCommit $head_commit)
    {
    }
}
