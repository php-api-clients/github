<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.18\Schema;

final class ContentFile
{
    public const SCHEMA_TITLE = 'Content File';
    public const SCHEMA_DESCRIPTION = 'Content File';
    private string $type;
    private string $encoding;
    private int $size;
    private string $name;
    private string $path;
    private string $content;
    private string $sha;
    private string $url;
    private string $git_url;
    private string $html_url;
    private string $download_url;
    private object $_links;
    private string $target;
    private string $submodule_git_url;
    public function type() : string
    {
        return $this->type;
    }
    public function encoding() : string
    {
        return $this->encoding;
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
    public function content() : string
    {
        return $this->content;
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
    public function _links() : object
    {
        return $this->_links;
    }
    public function target() : string
    {
        return $this->target;
    }
    public function submodule_git_url() : string
    {
        return $this->submodule_git_url;
    }
}
