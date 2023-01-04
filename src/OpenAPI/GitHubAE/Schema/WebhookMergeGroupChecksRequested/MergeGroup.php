<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\WebhookMergeGroupChecksRequested;

final class MergeGroup
{
    public const SCHEMA_JSON = '{"title":"MergeGroup","required":["head_sha","head_ref","base_sha","base_ref","head_commit"],"type":"object","properties":{"head_sha":{"type":"string","description":"The SHA of the merge group."},"head_ref":{"type":"string","description":"The full ref of the merge group."},"base_sha":{"type":"string","description":"The SHA of the merge group\'s parent commit."},"base_ref":{"type":"string","description":"The full ref of the branch the merge group will be merged into."},"head_commit":{"title":"SimpleCommit","required":["id","tree_id","message","timestamp","author","committer"],"type":"object","properties":{"author":{"title":"Committer","required":["email","name"],"type":"object","properties":{"date":{"type":"string","format":"date-time"},"email":{"type":["string","null"],"format":"email"},"name":{"type":"string","description":"The git author\'s name."},"username":{"type":"string"}},"description":"Metaproperties for Git author\\/committer information."},"committer":{"title":"Committer","required":["email","name"],"type":"object","properties":{"date":{"type":"string","format":"date-time"},"email":{"type":["string","null"],"format":"email"},"name":{"type":"string","description":"The git author\'s name."},"username":{"type":"string"}},"description":"Metaproperties for Git author\\/committer information."},"id":{"type":"string"},"message":{"type":"string"},"timestamp":{"type":"string"},"tree_id":{"type":"string"}}}}}';
    public const SCHEMA_TITLE = 'MergeGroup';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The SHA of the merge group.
     */
    private string $head_sha;
    /**
     * The full ref of the merge group.
     */
    private string $head_ref;
    /**
     * The SHA of the merge group's parent commit.
     */
    private string $base_sha;
    /**
     * The full ref of the branch the merge group will be merged into.
     */
    private string $base_ref;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\MergeGroup\HeadCommit::class)
     */
    private \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\MergeGroup\HeadCommit $head_commit;
    /**
     * The SHA of the merge group.
     */
    public function head_sha() : string
    {
        return $this->head_sha;
    }
    /**
     * The full ref of the merge group.
     */
    public function head_ref() : string
    {
        return $this->head_ref;
    }
    /**
     * The SHA of the merge group's parent commit.
     */
    public function base_sha() : string
    {
        return $this->base_sha;
    }
    /**
     * The full ref of the branch the merge group will be merged into.
     */
    public function base_ref() : string
    {
        return $this->base_ref;
    }
    public function head_commit() : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\MergeGroup\HeadCommit
    {
        return $this->head_commit;
    }
}
