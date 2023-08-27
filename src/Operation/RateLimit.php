<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operation;

use ApiClients\Client\GitHub\Operators;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\Schema\RateLimitOverview;

final class RateLimit
{
    public function __construct(private Operators $operators)
    {
    }

    /** @return Schema\RateLimitOverview|array{code:int} */
    public function get(): RateLimitOverview|array
    {
        return $this->operators->rateLimit👷Get()->call();
    }
}
