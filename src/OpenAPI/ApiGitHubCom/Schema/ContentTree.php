<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final readonly class ContentTree
{
    public const SCHEMA_JSON = '{"title":"Content Tree","required":["_links","git_url","html_url","download_url","name","path","sha","size","type","url","content","encoding"],"type":"object","properties":{"type":{"type":"string"},"size":{"type":"integer"},"name":{"type":"string"},"path":{"type":"string"},"sha":{"type":"string"},"url":{"type":"string","format":"uri"},"git_url":{"type":["string","null"],"format":"uri"},"html_url":{"type":["string","null"],"format":"uri"},"download_url":{"type":["string","null"],"format":"uri"},"entries":{"type":"array","items":{"required":["_links","git_url","html_url","download_url","name","path","sha","size","type","url"],"type":"object","properties":{"type":{"type":"string"},"size":{"type":"integer"},"name":{"type":"string"},"path":{"type":"string"},"content":{"type":"string"},"sha":{"type":"string"},"url":{"type":"string","format":"uri"},"git_url":{"type":["string","null"],"format":"uri"},"html_url":{"type":["string","null"],"format":"uri"},"download_url":{"type":["string","null"],"format":"uri"},"_links":{"required":["git","html","self"],"type":"object","properties":{"git":{"type":["string","null"],"format":"uri"},"html":{"type":["string","null"],"format":"uri"},"self":{"type":"string","format":"uri"}}}}}},"_links":{"required":["git","html","self"],"type":"object","properties":{"git":{"type":["string","null"],"format":"uri"},"html":{"type":["string","null"],"format":"uri"},"self":{"type":"string","format":"uri"}}}},"description":"Content Tree"}';
    public const SCHEMA_TITLE = 'Content Tree';
    public const SCHEMA_DESCRIPTION = 'Content Tree';
    public ?string $type;
    public ?int $size;
    public ?string $name;
    public ?string $path;
    public ?string $sha;
    public ?string $url;
    public ?string $git_url;
    public ?string $html_url;
    public ?string $download_url;
    public array $entries;
    public ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ContentTree\Links $_links;
    public function __construct(string $type, int $size, string $name, string $path, string $sha, string $url, string $git_url, string $html_url, string $download_url, array $entries, \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ContentTree\Links $_links)
    {
        $this->type = $type;
        $this->size = $size;
        $this->name = $name;
        $this->path = $path;
        $this->sha = $sha;
        $this->url = $url;
        $this->git_url = $git_url;
        $this->html_url = $html_url;
        $this->download_url = $download_url;
        $this->entries = $entries;
        $this->_links = $_links;
    }
}
