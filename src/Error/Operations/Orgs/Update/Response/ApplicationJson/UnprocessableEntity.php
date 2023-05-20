<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Error\Operations\Orgs\Update\Response\ApplicationJson;

use ApiClients\Client\GitHub\Schema;
use Error;

final class UnprocessableEntity extends Error
{
    public function __construct(public int $status, public Schema\Operations\Orgs\Update\Response\ApplicationJson\UnprocessableEntity $error)
    {
    }
}
