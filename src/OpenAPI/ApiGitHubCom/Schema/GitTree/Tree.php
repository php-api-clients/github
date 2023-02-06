<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\GitTree;

final class Tree
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"path":{"type":"string","examples":["test\\/file.rb"]},"mode":{"type":"string","examples":["040000"]},"type":{"type":"string","examples":["tree"]},"sha":{"type":"string","examples":["23f6827669e43831def8a7ad935069c8bd418261"]},"size":{"type":"integer","examples":[12]},"url":{"type":"string","examples":["https:\\/\\/api.github.com\\/repos\\/owner-482f3203ecf01f67e9deb18e\\/BBB_Private_Repo\\/git\\/blobs\\/23f6827669e43831def8a7ad935069c8bd418261"]}}}';
    public const SCHEMA_EXAMPLE = '{"path":"test\\/file.rb","mode":"040000","type":"tree","sha":"23f6827669e43831def8a7ad935069c8bd418261","size":12,"url":"https:\\/\\/api.github.com\\/repos\\/owner-482f3203ecf01f67e9deb18e\\/BBB_Private_Repo\\/git\\/blobs\\/23f6827669e43831def8a7ad935069c8bd418261"}';
    public const SCHEMA_TITLE = 'GitTree\\Tree';
    public const SCHEMA_DESCRIPTION = '';
    public readonly string $path;
    public readonly string $mode;
    public readonly string $type;
    public readonly string $sha;
    public readonly int $size;
    public readonly string $url;
    public function __construct(string $path, string $mode, string $type, string $sha, int $size, string $url)
    {
        $this->path = $path;
        $this->mode = $mode;
        $this->type = $type;
        $this->sha = $sha;
        $this->size = $size;
        $this->url = $url;
    }
}
