<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\ContentTree;

final class Entries
{
    public const SCHEMA_JSON = '{"required":["_links","git_url","html_url","download_url","name","path","sha","size","type","url"],"type":"object","properties":{"type":{"type":"string"},"size":{"type":"integer"},"name":{"type":"string"},"path":{"type":"string"},"content":{"type":"string"},"sha":{"type":"string"},"url":{"type":"string","format":"uri"},"git_url":{"type":["string","null"],"format":"uri"},"html_url":{"type":["string","null"],"format":"uri"},"download_url":{"type":["string","null"],"format":"uri"},"_links":{"required":["git","html","self"],"type":"object","properties":{"git":{"type":["string","null"],"format":"uri"},"html":{"type":["string","null"],"format":"uri"},"self":{"type":"string","format":"uri"}}}}}';
    public const SCHEMA_TITLE = 'ContentTree\\Entries';
    public const SCHEMA_DESCRIPTION = '';
    private string $type;
    private int $size;
    private string $name;
    private string $path;
    private ?string $content = null;
    private string $sha;
    private string $url;
    private $git_url;
    private $html_url;
    private $download_url;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Entries\Links::class)
     */
    private \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Entries\Links $_links;
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
    public function _links() : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Entries\Links
    {
        return $this->_links;
    }
}
