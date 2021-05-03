<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Schema;

final class ContentTree
{
    public const SCHEMA_TITLE = 'Content Tree';
    public const SPL_HASH = '00000000577b2db90000000061bd81a4';
    public const SCHEMA_DESCRIPTION = 'Content Tree';
    private ?string $type = null;
    private ?int $size = null;
    private ?string $name = null;
    private ?string $path = null;
    private ?string $sha = null;
    private ?string $url = null;
    private ?string $git_url = null;
    private ?string $html_url = null;
    private ?string $download_url = null;
    private array $entries = array();
    private ?object $_links = null;
    public function type() : ?string
    {
        return $this->type;
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
    public function entries() : array
    {
        return $this->entries;
    }
    public function _links() : ?object
    {
        return $this->_links;
    }
}
