<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class LicenseContent
{
    public const SCHEMA_JSON = '{"title":"License Content","required":["_links","git_url","html_url","download_url","name","path","sha","size","type","url","content","encoding","license"],"type":"object","properties":{"name":{"type":"string"},"path":{"type":"string"},"sha":{"type":"string"},"size":{"type":"integer"},"url":{"type":"string","format":"uri"},"html_url":{"type":["string","null"],"format":"uri"},"git_url":{"type":["string","null"],"format":"uri"},"download_url":{"type":["string","null"],"format":"uri"},"type":{"type":"string"},"content":{"type":"string"},"encoding":{"type":"string"},"_links":{"required":["git","html","self"],"type":"object","properties":{"git":{"type":["string","null"],"format":"uri"},"html":{"type":["string","null"],"format":"uri"},"self":{"type":"string","format":"uri"}}},"license":{"anyOf":[{"type":"null"},{"title":"License Simple","required":["key","name","url","spdx_id","node_id"],"type":"object","properties":{"key":{"type":"string","examples":["mit"]},"name":{"type":"string","examples":["MIT License"]},"url":{"type":["string","null"],"format":"uri","examples":["https:\\/\\/api.github.com\\/licenses\\/mit"]},"spdx_id":{"type":["string","null"],"examples":["MIT"]},"node_id":{"type":"string","examples":["MDc6TGljZW5zZW1pdA=="]},"html_url":{"type":"string","format":"uri"}},"description":"License Simple"}]}},"description":"License Content"}';
    public const SCHEMA_EXAMPLE = '[]';
    public const SCHEMA_TITLE = 'License Content';
    public const SCHEMA_DESCRIPTION = 'License Content';
    public readonly string $name;
    public readonly string $path;
    public readonly string $sha;
    public readonly int $size;
    public readonly string $url;
    public readonly ?string $html_url;
    public readonly ?string $git_url;
    public readonly ?string $download_url;
    public readonly string $type;
    public readonly string $content;
    public readonly string $encoding;
    public readonly \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\LicenseContent\Links $_links;
    public readonly \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\LicenseContent\License $license;
    public function __construct(string $name, string $path, string $sha, int $size, string $url, string $html_url, string $git_url, string $download_url, string $type, string $content, string $encoding, \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\LicenseContent\Links $_links, \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\LicenseContent\License $license)
    {
        $this->name = $name;
        $this->path = $path;
        $this->sha = $sha;
        $this->size = $size;
        $this->url = $url;
        $this->html_url = $html_url;
        $this->git_url = $git_url;
        $this->download_url = $download_url;
        $this->type = $type;
        $this->content = $content;
        $this->encoding = $encoding;
        $this->_links = $_links;
        $this->license = $license;
    }
}
