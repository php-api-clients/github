<?php declare(strict_types=1);

namespace ApiClients\Client\Github\Resource\Git;

use ApiClients\Foundation\Resource\ResourceInterface;

interface BlobInterface extends ResourceInterface
{
    const HYDRATE_CLASS = 'Git\\Blob';

    /**
     * @return string
     */
    public function sha(): string;

    /**
     * @return string
     */
    public function url(): string;

    /**
     * @return array
     */
    public function tree(): array;

    /**
     * @return bool
     */
    public function truncated(): bool;
}
