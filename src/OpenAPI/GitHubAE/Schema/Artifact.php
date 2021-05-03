<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema;

final class Artifact
{
    public const SCHEMA_TITLE = 'Artifact';
    public const SPL_HASH = '000000001d5bad6c00000000544e0d87';
    public const SCHEMA_DESCRIPTION = 'An artifact';
    private ?int $id = null;
    private ?string $node_id = null;
    /**
     * The name of the artifact.
     */
    private ?string $name = null;
    /**
     * The size in bytes of the artifact.
     */
    private ?int $size_in_bytes = null;
    private ?string $url = null;
    private ?string $archive_download_url = null;
    /**
     * Whether or not the artifact has expired.
     */
    private ?bool $expired = null;
    private ?string $created_at = null;
    private ?string $expires_at = null;
    private ?string $updated_at = null;
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
    public function size_in_bytes() : ?int
    {
        return $this->size_in_bytes;
    }
    public function url() : ?string
    {
        return $this->url;
    }
    public function archive_download_url() : ?string
    {
        return $this->archive_download_url;
    }
    public function expired() : ?bool
    {
        return $this->expired;
    }
    public function created_at() : ?string
    {
        return $this->created_at;
    }
    public function expires_at() : ?string
    {
        return $this->expires_at;
    }
    public function updated_at() : ?string
    {
        return $this->updated_at;
    }
}
