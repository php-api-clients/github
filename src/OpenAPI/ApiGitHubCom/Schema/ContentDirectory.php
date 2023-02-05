<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class ContentDirectory
{
    public const SCHEMA_JSON = '{"title":"Content Directory","type":"array","items":{"required":["_links","git_url","html_url","download_url","name","path","sha","size","type","url"],"type":"object","properties":{"type":{"enum":["dir","file","submodule","symlink"],"type":"string"},"size":{"type":"integer"},"name":{"type":"string"},"path":{"type":"string"},"content":{"type":"string"},"sha":{"type":"string"},"url":{"type":"string","format":"uri"},"git_url":{"type":["string","null"],"format":"uri"},"html_url":{"type":["string","null"],"format":"uri"},"download_url":{"type":["string","null"],"format":"uri"},"_links":{"required":["git","html","self"],"type":"object","properties":{"git":{"type":["string","null"],"format":"uri"},"html":{"type":["string","null"],"format":"uri"},"self":{"type":"string","format":"uri"}}}}},"description":"A list of directory items"}';
    public const SCHEMA_TITLE = 'content-directory';
    public const SCHEMA_DESCRIPTION = '';
    public readonly string $type;
    public readonly int $size;
    public readonly string $name;
    public readonly string $path;
    public readonly ?string $content;
    public readonly string $sha;
    public readonly string $url;
    public readonly ?string $git_url;
    public readonly ?string $html_url;
    public readonly ?string $download_url;
    public readonly \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ContentDirectory\Links $_links;
    public function __construct(string $type, int $size, string $name, string $path, string $content, string $sha, string $url, string $git_url, string $html_url, string $download_url, \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ContentDirectory\Links $_links)
    {
        $this->type = $type;
        $this->size = $size;
        $this->name = $name;
        $this->path = $path;
        $this->content = $content;
        $this->sha = $sha;
        $this->url = $url;
        $this->git_url = $git_url;
        $this->html_url = $html_url;
        $this->download_url = $download_url;
        $this->_links = $_links;
    }
}
