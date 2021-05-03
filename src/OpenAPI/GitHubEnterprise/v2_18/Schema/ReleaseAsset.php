<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Schema;

final class ReleaseAsset
{
    public const SCHEMA_TITLE = 'Release Asset';
    public const SPL_HASH = '000000002eab1d2b00000000697c5254';
    public const SCHEMA_DESCRIPTION = 'Data related to a release.';
    private string $url;
    private string $browser_download_url;
    private int $id;
    private string $node_id;
    /**
     * The file name of the asset.
     */
    private string $name;
    private string $label;
    /**
     * State of the release asset.
     */
    private string $state;
    private string $content_type;
    private int $size;
    private int $download_count;
    private string $created_at;
    private string $updated_at;
    private $uploader;
    public function url() : string
    {
        return $this->url;
    }
    public function browser_download_url() : string
    {
        return $this->browser_download_url;
    }
    public function id() : int
    {
        return $this->id;
    }
    public function node_id() : string
    {
        return $this->node_id;
    }
    public function name() : string
    {
        return $this->name;
    }
    public function label() : string
    {
        return $this->label;
    }
    public function state() : string
    {
        return $this->state;
    }
    public function content_type() : string
    {
        return $this->content_type;
    }
    public function size() : int
    {
        return $this->size;
    }
    public function download_count() : int
    {
        return $this->download_count;
    }
    public function created_at() : string
    {
        return $this->created_at;
    }
    public function updated_at() : string
    {
        return $this->updated_at;
    }
    public function uploader()
    {
        return $this->uploader;
    }
}
