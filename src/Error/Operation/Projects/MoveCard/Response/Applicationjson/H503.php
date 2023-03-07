<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Error\Operation\Projects\MoveCard\Response\Applicationjson;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final class H503 extends \Error
{
    public function __construct(public Schema\Operation\Projects\MoveCard\Response\Applicationjson\H503 $error)
    {
    }
}
