<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class ContentSymlink
{
    public const SCHEMA_JSON = '{"title":"Symlink Content","required":["_links","git_url","html_url","download_url","name","path","sha","size","type","url","target"],"type":"object","properties":{"type":{"enum":["symlink"],"type":"string"},"target":{"type":"string"},"size":{"type":"integer"},"name":{"type":"string"},"path":{"type":"string"},"sha":{"type":"string"},"url":{"type":"string","format":"uri"},"git_url":{"type":["string","null"],"format":"uri"},"html_url":{"type":["string","null"],"format":"uri"},"download_url":{"type":["string","null"],"format":"uri"},"_links":{"required":["git","html","self"],"type":"object","properties":{"git":{"type":["string","null"],"format":"uri"},"html":{"type":["string","null"],"format":"uri"},"self":{"type":"string","format":"uri"}}}},"description":"An object describing a symlink"}';
    public const SCHEMA_TITLE = 'Symlink Content';
    public const SCHEMA_DESCRIPTION = 'An object describing a symlink';
    private string $type;
    private string $target;
    private int $size;
    private string $name;
    private string $path;
    private string $sha;
    private string $url;
    private ?string $git_url;
    private ?string $html_url;
    private ?string $download_url;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ContentSymlink\Links::class)
     */
    private \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ContentSymlink\Links $_links;
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
    public function _links() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ContentSymlink\Links
    {
        return $this->_links;
    }
}
