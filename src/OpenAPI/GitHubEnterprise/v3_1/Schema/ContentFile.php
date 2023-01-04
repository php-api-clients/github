<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema;

final class ContentFile
{
    public const SCHEMA_JSON = '{"title":"Content File","required":["_links","git_url","html_url","download_url","name","path","sha","size","type","url","content","encoding"],"type":"object","properties":{"type":{"type":"string"},"encoding":{"type":"string"},"size":{"type":"integer"},"name":{"type":"string"},"path":{"type":"string"},"content":{"type":"string"},"sha":{"type":"string"},"url":{"type":"string","format":"uri"},"git_url":{"type":["string","null"],"format":"uri"},"html_url":{"type":["string","null"],"format":"uri"},"download_url":{"type":["string","null"],"format":"uri"},"_links":{"required":["git","html","self"],"type":"object","properties":{"git":{"type":["string","null"],"format":"uri"},"html":{"type":["string","null"],"format":"uri"},"self":{"type":"string","format":"uri"}}},"target":{"type":"string","examples":["\\"actual\\/actual.md\\""]},"submodule_git_url":{"type":"string","examples":["\\"git:\\/\\/example.com\\/defunkt\\/dotjs.git\\""]}},"description":"Content File"}';
    public const SCHEMA_TITLE = 'Content File';
    public const SCHEMA_DESCRIPTION = 'Content File';
    private string $type;
    private string $encoding;
    private int $size;
    private string $name;
    private string $path;
    private string $content;
    private string $sha;
    private string $url;
    private $git_url;
    private $html_url;
    private $download_url;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\ContentFile\Links::class)
     */
    private \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\ContentFile\Links $_links;
    private ?string $target = null;
    private ?string $submodule_git_url = null;
    public function type() : string
    {
        return $this->type;
    }
    public function encoding() : string
    {
        return $this->encoding;
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
    public function content() : string
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
    public function _links() : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\ContentFile\Links
    {
        return $this->_links;
    }
    public function target() : ?string
    {
        return $this->target;
    }
    public function submodule_git_url() : ?string
    {
        return $this->submodule_git_url;
    }
}
