<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Schema;

final class Artifact
{
    public const SCHEMA_TITLE = 'Artifact';
    public const SPL_HASH = '0000000065dd6e06000000006352672d';
    public const SCHEMA_DESCRIPTION = 'An artifact';
    private int $id;
    private string $node_id;
    /**
     * The name of the artifact.
     */
    private string $name;
    /**
     * The size in bytes of the artifact.
     */
    private int $size_in_bytes;
    private string $url;
    private string $archive_download_url;
    /**
     * Whether or not the artifact has expired.
     */
    private boolean $expired;
    private string $created_at;
    private string $expires_at;
    private string $updated_at;
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
    public function size_in_bytes() : int
    {
        return $this->size_in_bytes;
    }
    public function url() : string
    {
        return $this->url;
    }
    public function archive_download_url() : string
    {
        return $this->archive_download_url;
    }
    public function expired() : boolean
    {
        return $this->expired;
    }
    public function created_at() : string
    {
        return $this->created_at;
    }
    public function expires_at() : string
    {
        return $this->expires_at;
    }
    public function updated_at() : string
    {
        return $this->updated_at;
    }
}
