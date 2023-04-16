<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\HookDelivery\Response;

final readonly class Headers
{
    public const SCHEMA_JSON         = '{"type":["object","null"],"description":"The response headers received when the delivery was made.","additionalProperties":true}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = 'The response headers received when the delivery was made.';
    public const SCHEMA_EXAMPLE_DATA = '[]';

    public function __construct()
    {
    }
}
