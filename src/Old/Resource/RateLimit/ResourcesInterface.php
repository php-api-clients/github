<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\Resource\RateLimit;

use ApiClients\Foundation\Resource\ResourceInterface;

interface ResourcesInterface extends ResourceInterface
{
    public const HYDRATE_CLASS = 'RateLimit\\Resources';

    public function core(): Rate;

    public function search(): Rate;
}
