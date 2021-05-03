<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Schema;

final class ContentSymlink
{
    public const SCHEMA_TITLE = 'Symlink Content';
    public const SPL_HASH = '000000001138a88a00000000791e6d28';
    public const SCHEMA_DESCRIPTION = 'An object describing a symlink';
    private ?string $type = null;
    private ?string $target = null;
    private ?int $size = null;
    private ?string $name = null;
    private ?string $path = null;
    private ?string $sha = null;
    private ?string $url = null;
    private ?string $git_url = null;
    private ?string $html_url = null;
    private ?string $download_url = null;
    private ?object $_links = null;
    public function type() : ?string
    {
        return $this->type;
    }
    public function target() : ?string
    {
        return $this->target;
    }
    public function size() : ?int
    {
        return $this->size;
    }
    public function name() : ?string
    {
        return $this->name;
    }
    public function path() : ?string
    {
        return $this->path;
    }
    public function sha() : ?string
    {
        return $this->sha;
    }
    public function url() : ?string
    {
        return $this->url;
    }
    public function git_url() : ?string
    {
        return $this->git_url;
    }
    public function html_url() : ?string
    {
        return $this->html_url;
    }
    public function download_url() : ?string
    {
        return $this->download_url;
    }
    public function _links() : ?object
    {
        return $this->_links;
    }
}
