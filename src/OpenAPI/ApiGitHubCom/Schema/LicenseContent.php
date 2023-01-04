<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class LicenseContent
{
    public const SCHEMA_JSON = '{"title":"License Content","required":["_links","git_url","html_url","download_url","name","path","sha","size","type","url","content","encoding","license"],"type":"object","properties":{"name":{"type":"string"},"path":{"type":"string"},"sha":{"type":"string"},"size":{"type":"integer"},"url":{"type":"string","format":"uri"},"html_url":{"type":["string","null"],"format":"uri"},"git_url":{"type":["string","null"],"format":"uri"},"download_url":{"type":["string","null"],"format":"uri"},"type":{"type":"string"},"content":{"type":"string"},"encoding":{"type":"string"},"_links":{"required":["git","html","self"],"type":"object","properties":{"git":{"type":["string","null"],"format":"uri"},"html":{"type":["string","null"],"format":"uri"},"self":{"type":"string","format":"uri"}}},"license":{"anyOf":[{"type":"null"},{"title":"License Simple","required":["key","name","url","spdx_id","node_id"],"type":"object","properties":{"key":{"type":"string","examples":["mit"]},"name":{"type":"string","examples":["MIT License"]},"url":{"type":["string","null"],"format":"uri","examples":["https:\\/\\/api.github.com\\/licenses\\/mit"]},"spdx_id":{"type":["string","null"],"examples":["MIT"]},"node_id":{"type":"string","examples":["MDc6TGljZW5zZW1pdA=="]},"html_url":{"type":"string","format":"uri"}},"description":"License Simple"}]}},"description":"License Content"}';
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
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\LicenseContent\Links::class)
     */
    private \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\LicenseContent\Links $_links;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\LicenseContent\License::class)
     */
    private \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\LicenseContent\License $license;
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
    public function _links() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\LicenseContent\Links
    {
        return $this->_links;
    }
    public function license() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\LicenseContent\License
    {
        return $this->license;
    }
}
