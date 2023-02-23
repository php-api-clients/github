<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema;

final readonly class ContentFile
{
    public const SCHEMA_JSON = '{"title":"Content File","required":["_links","git_url","html_url","download_url","name","path","sha","size","type","url","content","encoding"],"type":"object","properties":{"type":{"enum":["file"],"type":"string"},"encoding":{"type":"string"},"size":{"type":"integer"},"name":{"type":"string"},"path":{"type":"string"},"content":{"type":"string"},"sha":{"type":"string"},"url":{"type":"string","format":"uri"},"git_url":{"type":["string","null"],"format":"uri"},"html_url":{"type":["string","null"],"format":"uri"},"download_url":{"type":["string","null"],"format":"uri"},"_links":{"required":["git","html","self"],"type":"object","properties":{"git":{"type":["string","null"],"format":"uri"},"html":{"type":["string","null"],"format":"uri"},"self":{"type":"string","format":"uri"}}},"target":{"type":"string","examples":["\\"actual\\/actual.md\\""]},"submodule_git_url":{"type":"string","examples":["\\"git:\\/\\/example.com\\/defunkt\\/dotjs.git\\""]}},"description":"Content File"}';
    public const SCHEMA_TITLE = 'Content File';
    public const SCHEMA_DESCRIPTION = 'Content File';
    public ?string $type;
    public ?string $encoding;
    public ?int $size;
    public ?string $name;
    public ?string $path;
    public ?string $content;
    public ?string $sha;
    public ?string $url;
    public ?string $git_url;
    public ?string $html_url;
    public ?string $download_url;
    public ?\ApiClients\Client\Github\Schema\ContentTree\Links $_links;
    public string $target;
    public string $submodule_git_url;
    public function __construct(string $type, string $encoding, int $size, string $name, string $path, string $content, string $sha, string $url, string $git_url, string $html_url, string $download_url, \ApiClients\Client\Github\Schema\ContentTree\Links $_links, string $target, string $submodule_git_url)
    {
        $this->type = $type;
        $this->encoding = $encoding;
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
        $this->target = $target;
        $this->submodule_git_url = $submodule_git_url;
    }
}
