<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Schema\GitTree;

final class Tree
{
    public const SCHEMA_TITLE       = 'git-tree::tree';
    public const SCHEMA_DESCRIPTION = '';
    private string $path;
    private string $mode;
    private string $type;
    private string $sha;
    private int $size;
    private string $url;

    public function path(): string
    {
        return $this->path;
    }

    public function mode(): string
    {
        return $this->mode;
    }

    public function type(): string
    {
        return $this->type;
    }

    public function sha(): string
    {
        return $this->sha;
    }

    public function size(): int
    {
        return $this->size;
    }

    public function url(): string
    {
        return $this->url;
    }
}
