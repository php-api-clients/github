<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Schema;

final class GitTree
{
    public const SCHEMA_TITLE = 'Git Tree';
    public const SCHEMA_DESCRIPTION = 'The hierarchy between files in a Git repository.';
    private string $sha;
    private string $url;
    private bool $truncated;
    /**
     * Objects specifying a tree structure
     * @var array<\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Schema\GitTree\Tree>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Schema\GitTree\Tree::class)
     */
    private array $tree = array();
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
    /**
     * Objects specifying a tree structure
     * @return array<\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Schema\GitTree\Tree>
     */
    public function tree() : array
    {
        return $this->tree;
    }
}
