<?php declare(strict_types=1);

namespace ApiClients\Client\Github\Resource\Git;

use ApiClients\Foundation\Resource\ResourceInterface;

interface NamedBlobInterface extends ResourceInterface
{
    const HYDRATE_CLASS = 'Git\\NamedBlob';

    /**
     * @return string
     */
    public function path(): string;

    /**
     * @return string
     */
    public function mode(): string;

    /**
     * @return string
     */
    public function type(): string;

    /**
     * @return int
     */
    public function size(): int;

    /**
     * @return string
     */
    public function sha(): string;

    /**
     * @return string
     */
    public function url(): string;
}
