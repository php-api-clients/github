<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Error\Operation\Projects\DeleteCard\Response\Applicationjson;

use ApiClients\Client\GitHub\Schema;
use Error;

final class H403 extends Error
{
    public function __construct(public int $status, public Schema\Operation\Projects\DeleteCard\Response\Applicationjson\H403 $error)
    {
    }
}
