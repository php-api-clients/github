<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Schema;

final class DiffEntry
{
    public const SCHEMA_TITLE = 'Diff Entry';
    public const SPL_HASH = '00000000567e2b9100000000401184f6';
    public const SCHEMA_DESCRIPTION = 'Diff Entry';
    private ?string $sha = null;
    private ?string $filename = null;
    private ?string $status = null;
    private ?int $additions = null;
    private ?int $deletions = null;
    private ?int $changes = null;
    private ?string $blob_url = null;
    private ?string $raw_url = null;
    private ?string $contents_url = null;
    private ?string $patch = null;
    private ?string $previous_filename = null;
    public function sha() : ?string
    {
        return $this->sha;
    }
    public function filename() : ?string
    {
        return $this->filename;
    }
    public function status() : ?string
    {
        return $this->status;
    }
    public function additions() : ?int
    {
        return $this->additions;
    }
    public function deletions() : ?int
    {
        return $this->deletions;
    }
    public function changes() : ?int
    {
        return $this->changes;
    }
    public function blob_url() : ?string
    {
        return $this->blob_url;
    }
    public function raw_url() : ?string
    {
        return $this->raw_url;
    }
    public function contents_url() : ?string
    {
        return $this->contents_url;
    }
    public function patch() : ?string
    {
        return $this->patch;
    }
    public function previous_filename() : ?string
    {
        return $this->previous_filename;
    }
}
