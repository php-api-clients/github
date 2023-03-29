<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Error\Operation\Projects\CreateCard\Response\Applicationjson;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final class H503 extends \Error
{
    public function __construct(public int $status, public Schema\Operation\Projects\CreateCard\Response\Applicationjson\H503 $error)
    {
    }
}
