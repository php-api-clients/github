<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Schema\Commit;

final class Files
{
    public const SCHEMA_TITLE       = 'commit::files';
    public const SCHEMA_DESCRIPTION = '';
    private string $filename;
    private int $additions;
    private int $deletions;
    private int $changes;
    private string $status;
    private string $raw_url;
    private string $blob_url;
    private string $patch;
    private string $sha;
    private string $contents_url;
    private string $previous_filename;

    public function filename(): string
    {
        return $this->filename;
    }

    public function additions(): int
    {
        return $this->additions;
    }

    public function deletions(): int
    {
        return $this->deletions;
    }

    public function changes(): int
    {
        return $this->changes;
    }

    public function status(): string
    {
        return $this->status;
    }

    public function raw_url(): string
    {
        return $this->raw_url;
    }

    public function blob_url(): string
    {
        return $this->blob_url;
    }

    public function patch(): string
    {
        return $this->patch;
    }

    public function sha(): string
    {
        return $this->sha;
    }

    public function contents_url(): string
    {
        return $this->contents_url;
    }

    public function previous_filename(): string
    {
        return $this->previous_filename;
    }
}
