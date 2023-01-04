<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\FileCommit;

final class Content
{
    public const SCHEMA_JSON = '{"type":["object","null"],"properties":{"name":{"type":"string"},"path":{"type":"string"},"sha":{"type":"string"},"size":{"type":"integer"},"url":{"type":"string"},"html_url":{"type":"string"},"git_url":{"type":"string"},"download_url":{"type":"string"},"type":{"type":"string"},"_links":{"type":"object","properties":{"self":{"type":"string"},"git":{"type":"string"},"html":{"type":"string"}}}}}';
    public const SCHEMA_TITLE = 'FileCommit\\Content';
    public const SCHEMA_DESCRIPTION = '';
    private string $name;
    private string $path;
    private string $sha;
    private int $size;
    private string $url;
    private string $html_url;
    private string $git_url;
    private string $download_url;
    private string $type;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Content\Links::class)
     */
    private \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Content\Links $_links;
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
    public function html_url() : string
    {
        return $this->html_url;
    }
    public function git_url() : string
    {
        return $this->git_url;
    }
    public function download_url() : string
    {
        return $this->download_url;
    }
    public function type() : string
    {
        return $this->type;
    }
    public function _links() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Content\Links
    {
        return $this->_links;
    }
}
