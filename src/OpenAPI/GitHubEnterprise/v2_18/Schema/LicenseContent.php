<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Schema;

final class LicenseContent
{
    public const SCHEMA_TITLE = 'License Content';
    public const SPL_HASH = '00000000577b2fea0000000061bd81a4';
    public const SCHEMA_DESCRIPTION = 'License Content';
    private ?string $name = null;
    private ?string $path = null;
    private ?string $sha = null;
    private ?int $size = null;
    private ?string $url = null;
    private ?string $html_url = null;
    private ?string $git_url = null;
    private ?string $download_url = null;
    private ?string $type = null;
    private ?string $content = null;
    private ?string $encoding = null;
    private ?object $_links = null;
    private $license;
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
    public function size() : ?int
    {
        return $this->size;
    }
    public function url() : ?string
    {
        return $this->url;
    }
    public function html_url() : ?string
    {
        return $this->html_url;
    }
    public function git_url() : ?string
    {
        return $this->git_url;
    }
    public function download_url() : ?string
    {
        return $this->download_url;
    }
    public function type() : ?string
    {
        return $this->type;
    }
    public function content() : ?string
    {
        return $this->content;
    }
    public function encoding() : ?string
    {
        return $this->encoding;
    }
    public function _links() : ?object
    {
        return $this->_links;
    }
    public function license()
    {
        return $this->license;
    }
}
