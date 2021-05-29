<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\Resource;

use ApiClients\Foundation\Resource\ResourceInterface;

interface TreeInterface extends ResourceInterface
{
    public const HYDRATE_CLASS = 'Tree';

    public function url(): string;

    public function sha(): string;
}
