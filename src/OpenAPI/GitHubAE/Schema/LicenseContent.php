<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema;

final class LicenseContent
{
    public const SCHEMA_TITLE = 'License Content';
    public const SCHEMA_DESCRIPTION = 'License Content';
    private string $name;
    private string $path;
    private string $sha;
    private int $size;
    private string $url;
    private ?string $html_url = null;
    private ?string $git_url = null;
    private ?string $download_url = null;
    private string $type;
    private string $content;
    private string $encoding;
    private array $_links = array();
    /**
     * License Simple
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\NullableLicenseSimple::class)
     */
    private ?\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\NullableLicenseSimple $license = null;
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
    public function html_url() : ?string
    {
        return $this->html_url;
    }
    public function git_url() : ?string
    {
        return $this->git_url;
    }
    public function download_url() : ?string
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
    public function _links() : array
    {
        return $this->_links;
    }
    /**
     * License Simple
     */
    public function license() : ?\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\NullableLicenseSimple
    {
        return $this->license;
    }
}
