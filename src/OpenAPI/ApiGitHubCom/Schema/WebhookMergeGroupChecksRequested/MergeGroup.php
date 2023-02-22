<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WebhookMergeGroupChecksRequested;

final readonly class MergeGroup
{
    public const SCHEMA_JSON = '{"title":"MergeGroup","required":["head_sha","head_ref","base_sha","base_ref","head_commit"],"type":"object","properties":{"head_sha":{"type":"string","description":"The SHA of the merge group."},"head_ref":{"type":"string","description":"The full ref of the merge group."},"base_sha":{"type":"string","description":"The SHA of the merge group\'s parent commit."},"base_ref":{"type":"string","description":"The full ref of the branch the merge group will be merged into."},"head_commit":{"title":"SimpleCommit","required":["id","tree_id","message","timestamp","author","committer"],"type":"object","properties":{"author":{"title":"Committer","required":["email","name"],"type":"object","properties":{"date":{"type":"string","format":"date-time"},"email":{"type":["string","null"],"format":"email"},"name":{"type":"string","description":"The git author\'s name."},"username":{"type":"string"}},"description":"Metaproperties for Git author\\/committer information."},"committer":{"title":"Committer","required":["email","name"],"type":"object","properties":{"date":{"type":"string","format":"date-time"},"email":{"type":["string","null"],"format":"email"},"name":{"type":"string","description":"The git author\'s name."},"username":{"type":"string"}},"description":"Metaproperties for Git author\\/committer information."},"id":{"type":"string"},"message":{"type":"string"},"timestamp":{"type":"string"},"tree_id":{"type":"string"}}}}}';
    public const SCHEMA_TITLE = 'MergeGroup';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The SHA of the merge group.
     */
    public ?string $head_sha;
    /**
     * The full ref of the merge group.
     */
    public ?string $head_ref;
    /**
     * The SHA of the merge group's parent commit.
     */
    public ?string $base_sha;
    /**
     * The full ref of the branch the merge group will be merged into.
     */
    public ?string $base_ref;
    public ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WebhookCheckSuiteCompleted\CheckSuite\HeadCommit $head_commit;
    public function __construct(string $head_sha, string $head_ref, string $base_sha, string $base_ref, \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WebhookCheckSuiteCompleted\CheckSuite\HeadCommit $head_commit)
    {
        $this->head_sha = $head_sha;
        $this->head_ref = $head_ref;
        $this->base_sha = $base_sha;
        $this->base_ref = $base_ref;
        $this->head_commit = $head_commit;
    }
}
