<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema\HookDelivery\Response;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
final readonly class Headers
{
    public const SCHEMA_JSON = '{"type":["object","null"],"description":"The response headers received when the delivery was made.","additionalProperties":true}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = 'The response headers received when the delivery was made.';
    public const SCHEMA_EXAMPLE_DATA = '[]';
    public function __construct()
    {
    }
}
