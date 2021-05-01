<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.18\Schema;

final class DiffEntry
{
    public const SCHEMA_TITLE = 'Diff Entry';
    public const SCHEMA_DESCRIPTION = 'Diff Entry';
    private string $sha;
    private string $filename;
    private string $status;
    private int $additions;
    private int $deletions;
    private int $changes;
    private string $blob_url;
    private string $raw_url;
    private string $contents_url;
    private string $patch;
    private string $previous_filename;
    public function sha() : string
    {
        return $this->sha;
    }
    public function filename() : string
    {
        return $this->filename;
    }
    public function status() : string
    {
        return $this->status;
    }
    public function additions() : int
    {
        return $this->additions;
    }
    public function deletions() : int
    {
        return $this->deletions;
    }
    public function changes() : int
    {
        return $this->changes;
    }
    public function blob_url() : string
    {
        return $this->blob_url;
    }
    public function raw_url() : string
    {
        return $this->raw_url;
    }
    public function contents_url() : string
    {
        return $this->contents_url;
    }
    public function patch() : string
    {
        return $this->patch;
    }
    public function previous_filename() : string
    {
        return $this->previous_filename;
    }
}
