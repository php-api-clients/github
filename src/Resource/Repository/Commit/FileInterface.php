<?php declare(strict_types=1);

namespace ApiClients\Client\Github\Resource\Repository\Commit;

use ApiClients\Foundation\Resource\ResourceInterface;

interface FileInterface extends ResourceInterface
{
    const HYDRATE_CLASS = 'Repository\\Commit\\File';

    /**
     * @return string
     */
    public function filename(): string;

    /**
     * @return int
     */
    public function additions(): int;

    /**
     * @return int
     */
    public function deletions(): int;

    /**
     * @return int
     */
    public function changes(): int;

    /**
     * @return string
     */
    public function status(): string;

    /**
     * @return string
     */
    public function rawUrl(): string;

    /**
     * @return string
     */
    public function blobUrl(): string;

    /**
     * @return string
     */
    public function patch(): string;
}
