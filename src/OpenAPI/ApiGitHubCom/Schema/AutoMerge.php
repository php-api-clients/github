<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class AutoMerge
{
    public const SCHEMA_TITLE = 'Auto merge';
    public const SPL_HASH = '00000000729dc9e300000000797f0b2e';
    public const SCHEMA_DESCRIPTION = 'The status of auto merging a pull request.';
    /**
     * Simple User
     */
    private ?object $enabled_by = null;
    /**
     * The merge method to use.
     */
    private ?string $merge_method = null;
    /**
     * Title for the merge commit message.
     */
    private ?string $commit_title = null;
    /**
     * Commit message for the merge commit.
     */
    private ?string $commit_message = null;
    public function enabled_by() : ?object
    {
        return $this->enabled_by;
    }
    public function merge_method() : ?string
    {
        return $this->merge_method;
    }
    public function commit_title() : ?string
    {
        return $this->commit_title;
    }
    public function commit_message() : ?string
    {
        return $this->commit_message;
    }
}
