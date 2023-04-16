<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Error;

use ApiClients\Client\GitHub\Schema;
use Error;

final class ValidationError extends Error
{
    public function __construct(public int $status, public Schema\ValidationError $error)
    {
    }
}
