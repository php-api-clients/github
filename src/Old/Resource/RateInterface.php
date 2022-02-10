<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\Resource;

use ApiClients\Foundation\Resource\ResourceInterface;

interface RateInterface extends ResourceInterface
{
    public const HYDRATE_CLASS = 'Rate';

    public function limit(): int;

    public function remaining(): int;

    public function reset(): int;
}
