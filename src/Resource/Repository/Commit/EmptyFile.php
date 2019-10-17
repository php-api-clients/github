<?php declare(strict_types=1);

namespace ApiClients\Client\Github\Resource\Repository\Commit;

use ApiClients\Foundation\Resource\EmptyResourceInterface;

abstract class EmptyFile implements FileInterface, EmptyResourceInterface
{
    /**
     * @return string
     */
    public function filename(): string
    {
        return null;
    }

    /**
     * @return int
     */
    public function additions(): int
    {
        return null;
    }

    /**
     * @return int
     */
    public function deletions(): int
    {
        return null;
    }

    /**
     * @return int
     */
    public function changes(): int
    {
        return null;
    }

    /**
     * @return string
     */
    public function status(): string
    {
        return null;
    }

    /**
     * @return string
     */
    public function rawUrl(): string
    {
        return null;
    }

    /**
     * @return string
     */
    public function blobUrl(): string
    {
        return null;
    }

    /**
     * @return string
     */
    public function patch(): string
    {
        return null;
    }
}
