<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema;

final class ContentSymlink
{
    public const SCHEMA_TITLE = 'Symlink Content';
    public const SCHEMA_DESCRIPTION = 'An object describing a symlink';
    private string $type;
    private string $target;
    private int $size;
    private string $name;
    private string $path;
    private string $sha;
    private string $url;
    private $git_url;
    private $html_url;
    private $download_url;
    private array $_links = array();
    public function type() : string
    {
        return $this->type;
    }
    public function target() : string
    {
        return $this->target;
    }
    public function size() : int
    {
        return $this->size;
    }
    public function name() : string
    {
        return $this->name;
    }
    public function path() : string
    {
        return $this->path;
    }
    public function sha() : string
    {
        return $this->sha;
    }
    public function url() : string
    {
        return $this->url;
    }
    public function git_url()
    {
        return $this->git_url;
    }
    public function html_url()
    {
        return $this->html_url;
    }
    public function download_url()
    {
        return $this->download_url;
    }
    public function _links() : array
    {
        return $this->_links;
    }
}
