<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema;

final class AutoMerge
{
    public const SCHEMA_TITLE = 'Auto merge';
    public const SPL_HASH = '000000000c1ce30a0000000065732ccc';
    public const SCHEMA_DESCRIPTION = 'The status of auto merging a pull request.';
    /**
     * Simple User
     */
    private object $enabled_by;
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
    public function enabled_by() : object
    {
        return $this->enabled_by;
    }
    public function merge_method() : string
    {
        return $this->merge_method;
    }
    public function commit_title() : string
    {
        return $this->commit_title;
    }
    public function commit_message() : string
    {
        return $this->commit_message;
    }
}
