<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\HookDelivery\Request;

final readonly class Payload
{
    public const SCHEMA_JSON         = '{"type":["object","null"],"description":"The webhook payload.","additionalProperties":true}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = 'The webhook payload.';
    public const SCHEMA_EXAMPLE_DATA = '[]';

    public function __construct()
    {
    }
}
