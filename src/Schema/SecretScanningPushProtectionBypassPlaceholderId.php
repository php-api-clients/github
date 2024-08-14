<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema;

final readonly class SecretScanningPushProtectionBypassPlaceholderId
{
    public const SCHEMA_JSON         = '{
    "type": "string",
    "description": "The ID of the push protection bypass placeholder. This value is returned on any push protected routes."
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = 'The ID of the push protection bypass placeholder. This value is returned on any push protected routes.';
    public const SCHEMA_EXAMPLE_DATA = '[]';

    public function __construct()
    {
    }
}
