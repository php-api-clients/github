<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Error\Operations\Projects\MoveCard\Response\ApplicationJson;

use ApiClients\Client\GitHub\Schema;
use Error;

final class ServiceUnavailable extends Error
{
    public function __construct(public int $status, public Schema\Operations\Projects\MoveCard\Response\ApplicationJson\ServiceUnavailable $error)
    {
    }
}
