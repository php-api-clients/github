<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Error\Operation\Projects\DeleteCard\Response\Applicationjson;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final class H403 extends \Error
{
    public function __construct(public Schema\Operation\Projects\DeleteCard\Response\Applicationjson\H403 $error)
    {
    }
}
