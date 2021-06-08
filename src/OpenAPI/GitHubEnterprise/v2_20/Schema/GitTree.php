<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Schema;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Schema\GitTree\Tree;

final class GitTree
{
    public const SCHEMA_TITLE       = 'Git Tree';
    public const SCHEMA_DESCRIPTION = 'The hierarchy between files in a Git repository.';
    private string $sha;
    private string $url;
    private bool $truncated;
    /**
     * Objects specifying a tree structure
     *
     * @var array<Tree>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Schema\GitTree\Tree::class)
     */
    private array $tree = [];

    public function sha(): string
    {
        return $this->sha;
    }

    public function url(): string
    {
        return $this->url;
    }

    public function truncated(): bool
    {
        return $this->truncated;
    }

    /**
     * Objects specifying a tree structure
     *
     * @return array<Tree>
     */
    public function tree(): array
    {
        return $this->tree;
    }
}
