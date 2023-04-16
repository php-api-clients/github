<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Error;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
use ApiClients\Client\GitHub\Router;
use ApiClients\Client\GitHub\ChunkSize;
final class BasicError extends \Error
{
    public function __construct(public int $status, public Schema\BasicError $error)
    {
    }
}
