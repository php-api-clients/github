<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\HookDelivery\Response;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
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
