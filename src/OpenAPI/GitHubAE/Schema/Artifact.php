<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema;

final class Artifact
{
    public const SCHEMA_TITLE = 'Artifact';
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
    private bool $expired;
    private ?string $created_at = null;
    private ?string $expires_at = null;
    private ?string $updated_at = null;
    private array $workflow_run = array();
    public function id() : int
    {
        return $this->id;
    }
    public function node_id() : string
    {
        return $this->node_id;
    }
    /**
     * The name of the artifact.
     */
    public function name() : string
    {
        return $this->name;
    }
    /**
     * The size in bytes of the artifact.
     */
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
    /**
     * Whether or not the artifact has expired.
     */
    public function expired() : bool
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
    public function workflow_run() : array
    {
        return $this->workflow_run;
    }
}
