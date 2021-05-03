<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Schema;

final class GitTree
{
    public const SCHEMA_TITLE = 'Git Tree';
    public const SPL_HASH = '00000000430cf2d40000000030bcf664';
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
