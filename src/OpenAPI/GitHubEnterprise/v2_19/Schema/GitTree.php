<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Schema;

final class GitTree
{
    public const SCHEMA_TITLE = 'Git Tree';
    public const SPL_HASH = '000000006312ff9a0000000044ad25fc';
    public const SCHEMA_DESCRIPTION = 'The hierarchy between files in a Git repository.';
    private string $sha;
    private string $url;
    private bool $truncated;
    /**
     * Objects specifying a tree structure
     */
    private array $tree;
    public function sha() : string
    {
        return $this->sha;
    }
    public function url() : string
    {
        return $this->url;
    }
    public function truncated() : bool
    {
        return $this->truncated;
    }
    public function tree() : array
    {
        return $this->tree;
    }
}
