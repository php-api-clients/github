<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\Resource\Git;

use ApiClients\Foundation\Resource\ResourceInterface;

interface RefInterface extends ResourceInterface
{
    public const HYDRATE_CLASS = 'Git\\Ref';

    public function ref(): string;

    public function url(): string;

    public function object(): Git\Ref\Object_;
}
