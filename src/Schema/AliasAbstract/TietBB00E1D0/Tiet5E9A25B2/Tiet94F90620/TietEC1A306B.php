<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\AliasAbstract\TietBB00E1D0\Tiet5E9A25B2\Tiet94F90620;

abstract readonly class TietEC1A306B
{
    public const SCHEMA_JSON         = '{
    "type": "object",
    "properties": {
        "status": {
            "enum": [
                "enabled",
                "disabled"
            ],
            "type": "string"
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "status": "disabled"
}';

    public function __construct(public string|null $status)
    {
    }
}
