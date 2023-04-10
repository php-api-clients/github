<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Error\Operation\Gists\Get\Response\Applicationjson;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
final class H403 extends \Error
{
    public function __construct(public int $status, public Schema\Operation\Gists\Get\Response\Applicationjson\H403 $error)
    {
    }
}
