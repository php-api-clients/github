<?php declare(strict_types=1);

namespace ApiClients\Client\Github\Resource\Repository\Commit;

use ApiClients\Foundation\Hydrator\Annotation\EmptyResource;
use ApiClients\Foundation\Resource\AbstractResource;

/**
 * @EmptyResource("Repository\Commit\EmptyFile")
 */
abstract class File extends AbstractResource implements FileInterface
{
    /**
     * @var string
     */
    protected $filename;

    /**
     * @var int
     */
    protected $additions;

    /**
     * @var int
     */
    protected $deletions;

    /**
     * @var int
     */
    protected $changes;

    /**
     * @var string
     */
    protected $status;

    /**
     * @var string
     */
    protected $raw_url;

    /**
     * @var string
     */
    protected $blob_url;

    /**
     * @var string
     */
    protected $patch;

    /**
     * @return string
     */
    public function filename(): string
    {
        return $this->filename;
    }

    /**
     * @return int
     */
    public function additions(): int
    {
        return $this->additions;
    }

    /**
     * @return int
     */
    public function deletions(): int
    {
        return $this->deletions;
    }

    /**
     * @return int
     */
    public function changes(): int
    {
        return $this->changes;
    }

    /**
     * @return string
     */
    public function status(): string
    {
        return $this->status;
    }

    /**
     * @return string
     */
    public function rawUrl(): string
    {
        return $this->raw_url;
    }

    /**
     * @return string
     */
    public function blobUrl(): string
    {
        return $this->blob_url;
    }

    /**
     * @return string
     */
    public function patch(): string
    {
        return $this->patch;
    }
}
