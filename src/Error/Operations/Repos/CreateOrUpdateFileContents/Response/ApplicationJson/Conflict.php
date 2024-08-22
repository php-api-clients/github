<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Error\Operations\Repos\CreateOrUpdateFileContents\Response\ApplicationJson;

use ApiClients\Client\GitHub\Schema;
use Error;

final class Conflict extends Error
{
    public function __construct(public int $status, public Schema\Operations\Repos\CreateOrUpdateFileContents\Response\ApplicationJson\Conflict $error)
    {
    }
}
