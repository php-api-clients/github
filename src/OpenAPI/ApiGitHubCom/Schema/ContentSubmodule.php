<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class ContentSubmodule
{
    public const SCHEMA_JSON = '{"title":"Submodule Content","required":["_links","git_url","html_url","download_url","name","path","sha","size","type","url","submodule_git_url"],"type":"object","properties":{"type":{"enum":["submodule"],"type":"string"},"submodule_git_url":{"type":"string","format":"uri"},"size":{"type":"integer"},"name":{"type":"string"},"path":{"type":"string"},"sha":{"type":"string"},"url":{"type":"string","format":"uri"},"git_url":{"type":["string","null"],"format":"uri"},"html_url":{"type":["string","null"],"format":"uri"},"download_url":{"type":["string","null"],"format":"uri"},"_links":{"required":["git","html","self"],"type":"object","properties":{"git":{"type":["string","null"],"format":"uri"},"html":{"type":["string","null"],"format":"uri"},"self":{"type":"string","format":"uri"}}}},"description":"An object describing a submodule"}';
    public const SCHEMA_EXAMPLE = '[]';
    public const SCHEMA_TITLE = 'Submodule Content';
    public const SCHEMA_DESCRIPTION = 'An object describing a submodule';
    public readonly string $type;
    public readonly string $submodule_git_url;
    public readonly int $size;
    public readonly string $name;
    public readonly string $path;
    public readonly string $sha;
    public readonly string $url;
    public readonly ?string $git_url;
    public readonly ?string $html_url;
    public readonly ?string $download_url;
    public readonly \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ContentSubmodule\Links $_links;
    public function __construct(string $type, string $submodule_git_url, int $size, string $name, string $path, string $sha, string $url, string $git_url, string $html_url, string $download_url, \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ContentSubmodule\Links $_links)
    {
        $this->type = $type;
        $this->submodule_git_url = $submodule_git_url;
        $this->size = $size;
        $this->name = $name;
        $this->path = $path;
        $this->sha = $sha;
        $this->url = $url;
        $this->git_url = $git_url;
        $this->html_url = $html_url;
        $this->download_url = $download_url;
        $this->_links = $_links;
    }
}
