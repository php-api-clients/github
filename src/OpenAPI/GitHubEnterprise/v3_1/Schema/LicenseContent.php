<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema;

final class LicenseContent
{
    public const SCHEMA_TITLE = 'License Content';
    public const SCHEMA_DESCRIPTION = 'License Content';
    private string $name;
    private string $path;
    private string $sha;
    private int $size;
    private string $url;
    private $html_url;
    private $git_url;
    private $download_url;
    private string $type;
    private string $content;
    private string $encoding;
    private array $_links = array();
    private $license;
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
    public function size() : int
    {
        return $this->size;
    }
    public function url() : string
    {
        return $this->url;
    }
    public function html_url()
    {
        return $this->html_url;
    }
    public function git_url()
    {
        return $this->git_url;
    }
    public function download_url()
    {
        return $this->download_url;
    }
    public function type() : string
    {
        return $this->type;
    }
    public function content() : string
    {
        return $this->content;
    }
    public function encoding() : string
    {
        return $this->encoding;
    }
    public function _links() : array
    {
        return $this->_links;
    }
    public function license()
    {
        return $this->license;
    }
}
