<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema;

final class GitTree
{
    public const SCHEMA_TITLE = 'Git Tree';
    public const SPL_HASH = '000000001d5ba68c00000000544e0d87';
    public const SCHEMA_DESCRIPTION = 'The hierarchy between files in a Git repository.';
    private ?string $sha = null;
    private ?string $url = null;
    private ?bool $truncated = null;
    /**
     * Objects specifying a tree structure
     */
    private array $tree = array();
    public function sha() : ?string
    {
        return $this->sha;
    }
    public function url() : ?string
    {
        return $this->url;
    }
    public function truncated() : ?bool
    {
        return $this->truncated;
    }
    public function tree() : array
    {
        return $this->tree;
    }
}
