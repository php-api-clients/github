<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Error\Operation\Gists\CheckIsStarred\Response\Applicationjson;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final class H404 extends \Error
{
    public function __construct(public int $status, public Schema\Operation\Gists\CheckIsStarred\Response\Applicationjson\H404 $error)
    {
    }
}
