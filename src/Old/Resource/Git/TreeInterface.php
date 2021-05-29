<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\Resource\Git;

use ApiClients\Foundation\Resource\ResourceInterface;

interface TreeInterface extends ResourceInterface
{
    public const HYDRATE_CLASS = 'Git\\Tree';

    public function sha(): string;

    public function url(): string;

    /**
     * @return array
     */
    public function tree(): array;

    public function truncated(): bool;
}
