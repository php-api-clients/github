<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\GitTree;

final class Tree
{
    public const SCHEMA_TITLE       = 'git-tree::tree';
    public const SCHEMA_DESCRIPTION = '';
    private ?string $path           = null;
    private ?string $mode           = null;
    private ?string $type           = null;
    private ?string $sha            = null;
    private ?int $size              = null;
    private ?string $url            = null;

    public function path(): ?string
    {
        return $this->path;
    }

    public function mode(): ?string
    {
        return $this->mode;
    }

    public function type(): ?string
    {
        return $this->type;
    }

    public function sha(): ?string
    {
        return $this->sha;
    }

    public function size(): ?int
    {
        return $this->size;
    }

    public function url(): ?string
    {
        return $this->url;
    }
}
