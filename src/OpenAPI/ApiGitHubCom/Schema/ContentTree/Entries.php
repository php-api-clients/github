<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ContentTree;

final class Entries
{
    public const SCHEMA_TITLE = 'content-tree::entries';
    public const SCHEMA_DESCRIPTION = '';
    private string $type;
    private int $size;
    private string $name;
    private string $path;
    private ?string $content = null;
    private string $sha;
    private string $url;
    private ?string $git_url = null;
    private ?string $html_url = null;
    private ?string $download_url = null;
    private array $_links = array();
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
    public function content() : ?string
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
    public function _links() : array
    {
        return $this->_links;
    }
}
