<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\HookDelivery\Request;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class Headers
{
    public const SCHEMA_JSON = '{"type":["object","null"],"description":"The request headers sent with the webhook delivery.","additionalProperties":true}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = 'The request headers sent with the webhook delivery.';
    public const SCHEMA_EXAMPLE_DATA = '[]';
    public function __construct()
    {
    }
}
