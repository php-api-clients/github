<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Error\Operation\Orgs\Update\Response\Applicationjson;

use ApiClients\Client\GitHub\Schema;
use Error;

final class H422 extends Error
{
    public function __construct(public int $status, public Schema\Operation\Orgs\Update\Response\Applicationjson\H422 $error)
    {
    }
}
