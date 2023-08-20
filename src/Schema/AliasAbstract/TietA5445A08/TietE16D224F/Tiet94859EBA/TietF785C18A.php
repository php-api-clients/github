<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\AliasAbstract\TietA5445A08\TietE16D224F\Tiet94859EBA;

abstract readonly class TietF785C18A
{
    public const SCHEMA_JSON         = '{
    "type": "object",
    "properties": {
        "message": {
            "type": "string"
        },
        "url": {
            "type": "string"
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "message": "generated",
    "url": "generated"
}';

    public function __construct(public string|null $message, public string|null $url)
    {
    }
}
