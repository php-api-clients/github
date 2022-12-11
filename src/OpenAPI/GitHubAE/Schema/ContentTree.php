<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema;

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
    private $git_url;
    private $html_url;
    private $download_url;
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\ContentTree\Entries>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\ContentTree\Entries::class)
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
    /**
     * @return array<\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\ContentTree\Entries>
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
