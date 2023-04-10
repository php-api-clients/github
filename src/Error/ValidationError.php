<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Error;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
final class ValidationError extends \Error
{
    public function __construct(public int $status, public Schema\ValidationError $error)
    {
    }
}
