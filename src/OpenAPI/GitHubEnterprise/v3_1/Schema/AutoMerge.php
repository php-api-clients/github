<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema;

final class AutoMerge
{
    public const SCHEMA_TITLE = 'Auto merge';
    public const SCHEMA_DESCRIPTION = 'The status of auto merging a pull request.';
    /**
     * Simple User
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\SimpleUser::class)
     */
    private \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\SimpleUser $enabled_by;
    /**
     * The merge method to use.
     */
    private string $merge_method;
    /**
     * Title for the merge commit message.
     */
    private string $commit_title;
    /**
     * Commit message for the merge commit.
     */
    private string $commit_message;
    /**
     * Simple User
     */
    public function enabled_by() : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\SimpleUser
    {
        return $this->enabled_by;
    }
    /**
     * The merge method to use.
     */
    public function merge_method() : string
    {
        return $this->merge_method;
    }
    /**
     * Title for the merge commit message.
     */
    public function commit_title() : string
    {
        return $this->commit_title;
    }
    /**
     * Commit message for the merge commit.
     */
    public function commit_message() : string
    {
        return $this->commit_message;
    }
}
