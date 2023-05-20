<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\Deployment\Payload;

final readonly class Zero
{
    public const SCHEMA_JSON         = '{"type":"object","additionalProperties":true}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '[]';

    public function __construct()
    {
    }
}
