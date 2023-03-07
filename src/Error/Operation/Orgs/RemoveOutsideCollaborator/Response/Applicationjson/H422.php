<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Error\Operation\Orgs\RemoveOutsideCollaborator\Response\Applicationjson;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final class H422 extends \Error
{
    public function __construct(public Schema\Operation\Orgs\RemoveOutsideCollaborator\Response\Applicationjson\H422 $error)
    {
    }
}
