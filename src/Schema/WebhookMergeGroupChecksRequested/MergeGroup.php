<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\WebhookMergeGroupChecksRequested;

use ApiClients\Client\GitHub\Schema;
use EventSauce\ObjectHydrator\MapFrom;

final readonly class MergeGroup
{
    public const SCHEMA_JSON         = '{"title":"MergeGroup","required":["head_sha","head_ref","base_sha","base_ref","head_commit"],"type":"object","properties":{"head_sha":{"type":"string","description":"The SHA of the merge group."},"head_ref":{"type":"string","description":"The full ref of the merge group."},"base_sha":{"type":"string","description":"The SHA of the merge group\'s parent commit."},"base_ref":{"type":"string","description":"The full ref of the branch the merge group will be merged into."},"head_commit":{"title":"SimpleCommit","required":["id","tree_id","message","timestamp","author","committer"],"type":"object","properties":{"author":{"title":"Committer","required":["email","name"],"type":"object","properties":{"date":{"type":"string","format":"date-time"},"email":{"type":["string","null"],"format":"email"},"name":{"type":"string","description":"The git author\'s name."},"username":{"type":"string"}},"description":"Metaproperties for Git author\\/committer information."},"committer":{"title":"Committer","required":["email","name"],"type":"object","properties":{"date":{"type":"string","format":"date-time"},"email":{"type":["string","null"],"format":"email"},"name":{"type":"string","description":"The git author\'s name."},"username":{"type":"string"}},"description":"Metaproperties for Git author\\/committer information."},"id":{"type":"string"},"message":{"type":"string"},"timestamp":{"type":"string"},"tree_id":{"type":"string"}}}}}';
    public const SCHEMA_TITLE        = 'MergeGroup';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"head_sha":"generated","head_ref":"generated","base_sha":"generated","base_ref":"generated","head_commit":{"author":{"date":"1970-01-01T00:00:00+00:00","email":"hi@example.com","name":"generated","username":"generated"},"committer":{"date":"1970-01-01T00:00:00+00:00","email":"hi@example.com","name":"generated","username":"generated"},"id":"generated","message":"generated","timestamp":"generated","tree_id":"generated"}}';

    /**
     * headSha: The SHA of the merge group.
     * headRef: The full ref of the merge group.
     * baseSha: The SHA of the merge group's parent commit.
     * baseRef: The full ref of the branch the merge group will be merged into.
     */
    public function __construct(#[MapFrom('head_sha')] public string $headSha, #[MapFrom('head_ref')] public string $headRef, #[MapFrom('base_sha')] public string $baseSha, #[MapFrom('base_ref')] public string $baseRef, #[MapFrom('head_commit')] public Schema\WebhookMergeGroupChecksRequested\MergeGroup\HeadCommit $headCommit)
    {
    }
}
