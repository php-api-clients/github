<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\Resource;

use ApiClients\Foundation\Resource\ResourceInterface;

interface RateLimitInterface extends ResourceInterface
{
    public const HYDRATE_CLASS = 'RateLimit';

    public function resources(): RateLimit\Resource;

    public function rate(): Rate;
}
