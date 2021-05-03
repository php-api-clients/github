<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Schema;

final class ReleaseAsset
{
    public const SCHEMA_TITLE = 'Release Asset';
    public const SPL_HASH = '0000000008b9234100000000412ebbda';
    public const SCHEMA_DESCRIPTION = 'Data related to a release.';
    private ?string $url = null;
    private ?string $browser_download_url = null;
    private ?int $id = null;
    private ?string $node_id = null;
    /**
     * The file name of the asset.
     */
    private ?string $name = null;
    private ?string $label = null;
    /**
     * State of the release asset.
     */
    private ?string $state = null;
    private ?string $content_type = null;
    private ?int $size = null;
    private ?int $download_count = null;
    private ?string $created_at = null;
    private ?string $updated_at = null;
    private $uploader;
    public function url() : ?string
    {
        return $this->url;
    }
    public function browser_download_url() : ?string
    {
        return $this->browser_download_url;
    }
    public function id() : ?int
    {
        return $this->id;
    }
    public function node_id() : ?string
    {
        return $this->node_id;
    }
    public function name() : ?string
    {
        return $this->name;
    }
    public function label() : ?string
    {
        return $this->label;
    }
    public function state() : ?string
    {
        return $this->state;
    }
    public function content_type() : ?string
    {
        return $this->content_type;
    }
    public function size() : ?int
    {
        return $this->size;
    }
    public function download_count() : ?int
    {
        return $this->download_count;
    }
    public function created_at() : ?string
    {
        return $this->created_at;
    }
    public function updated_at() : ?string
    {
        return $this->updated_at;
    }
    public function uploader()
    {
        return $this->uploader;
    }
}
