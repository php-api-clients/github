<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class ContentTree
{
    public const SCHEMA_TITLE = 'Content Tree';
    public const SPL_HASH = '0000000020701bea0000000042193899';
    public const SCHEMA_DESCRIPTION = 'Content Tree';
    private string $type;
    private int $size;
    private string $name;
    private string $path;
    private string $sha;
    private string $url;
    private string $git_url;
    private string $html_url;
    private string $download_url;
    private array $entries;
    private object $_links;
    public function type() : string
    {
        return $this->type;
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
    public function git_url() : string
    {
        return $this->git_url;
    }
    public function html_url() : string
    {
        return $this->html_url;
    }
    public function download_url() : string
    {
        return $this->download_url;
    }
    public function entries() : array
    {
        return $this->entries;
    }
    public function _links() : object
    {
        return $this->_links;
    }
}
