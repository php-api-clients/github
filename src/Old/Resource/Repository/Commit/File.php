<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\Resource\Repository\Commit;

use ApiClients\Foundation\Hydrator\Annotation\EmptyResource;
use ApiClients\Foundation\Resource\AbstractResource;

/**
 * @EmptyResource("Repository\Commit\EmptyFile")
 */
abstract class File extends AbstractResource implements FileInterface
{
    protected string $filename;

    protected int $additions;

    protected int $deletions;

    protected int $changes;

    protected string $status;

    protected string $raw_url;

    protected string $blob_url;

    protected string $patch;

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

    public function rawUrl(): string
    {
        return $this->raw_url;
    }

    public function blobUrl(): string
    {
        return $this->blob_url;
    }

    public function patch(): string
    {
        return $this->patch;
    }
}
