<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\Resource\Git;

use ApiClients\Foundation\Resource\ResourceInterface;

interface NamedBlobInterface extends ResourceInterface
{
    public const HYDRATE_CLASS = 'Git\\NamedBlob';

    public function path(): string;

    public function mode(): string;

    public function type(): string;

    public function size(): int;

    public function sha(): string;

    public function url(): string;
}
