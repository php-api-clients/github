<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Schema;

final class ContentSubmodule
{
    public const SCHEMA_TITLE = 'Symlink Content';
    public const SPL_HASH = '000000006312fc5b0000000044ad25fc';
    public const SCHEMA_DESCRIPTION = 'An object describing a symlink';
    private string $type;
    private string $submodule_git_url;
    private int $size;
    private string $name;
    private string $path;
    private string $sha;
    private string $url;
    private string $git_url;
    private string $html_url;
    private string $download_url;
    private object $_links;
    public function type() : string
    {
        return $this->type;
    }
    public function submodule_git_url() : string
    {
        return $this->submodule_git_url;
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
    public function _links() : object
    {
        return $this->_links;
    }
}
