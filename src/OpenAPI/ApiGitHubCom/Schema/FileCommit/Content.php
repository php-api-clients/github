<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\FileCommit;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\FileCommit\Content\Links;

final readonly class Content
{
    public const SCHEMA_JSON        = '{"type":["object","null"],"properties":{"name":{"type":"string"},"path":{"type":"string"},"sha":{"type":"string"},"size":{"type":"integer"},"url":{"type":"string"},"html_url":{"type":"string"},"git_url":{"type":"string"},"download_url":{"type":"string"},"type":{"type":"string"},"_links":{"type":"object","properties":{"self":{"type":"string"},"git":{"type":"string"},"html":{"type":"string"}}}}}';
    public const SCHEMA_TITLE       = '';
    public const SCHEMA_DESCRIPTION = '';
    public ?string $name;
    public ?string $path;
    public ?string $sha;
    public ?int $size;
    public ?string $url;
    public ?string $html_url;
    public ?string $git_url;
    public ?string $download_url;
    public ?string $type;
    public ?Links $_links;

    public function __construct(string $name, string $path, string $sha, int $size, string $url, string $html_url, string $git_url, string $download_url, string $type, Links $_links)
    {
        $this->name         = $name;
        $this->path         = $path;
        $this->sha          = $sha;
        $this->size         = $size;
        $this->url          = $url;
        $this->html_url     = $html_url;
        $this->git_url      = $git_url;
        $this->download_url = $download_url;
        $this->type         = $type;
        $this->_links       = $_links;
    }
}
