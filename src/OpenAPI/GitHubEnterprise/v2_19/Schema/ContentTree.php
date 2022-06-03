<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Schema;

final class ContentTree
{
    public const SCHEMA_TITLE = 'Content Tree';
    public const SCHEMA_DESCRIPTION = 'Content Tree';
    private string $type;
    private int $size;
    private string $name;
    private string $path;
    private string $sha;
    private string $url;
    private ?string $git_url = null;
    private ?string $html_url = null;
    private ?string $download_url = null;
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Schema\ContentTree\Entries>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Schema\ContentTree\Entries::class)
     */
    private array $entries = array();
    private array $_links = array();
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
    /**
     * @return array<\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Schema\ContentTree\Entries>
     */
    public function entries() : array
    {
        return $this->entries;
    }
    public function _links() : array
    {
        return $this->_links;
    }
}
