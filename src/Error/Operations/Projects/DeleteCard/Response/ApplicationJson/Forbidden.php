<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Error\Operations\Projects\DeleteCard\Response\ApplicationJson;

use ApiClients\Client\GitHub\Schema;
use Error;

final class Forbidden extends Error
{
    public function __construct(public int $status, public Schema\Operations\Projects\DeleteCard\Response\ApplicationJson\Forbidden $error)
    {
    }
}
