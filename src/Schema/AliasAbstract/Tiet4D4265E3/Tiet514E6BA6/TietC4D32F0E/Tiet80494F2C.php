<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\AliasAbstract\Tiet4D4265E3\Tiet514E6BA6\TietC4D32F0E;

abstract readonly class Tiet80494F2C
{
    public const SCHEMA_JSON         = '{
    "type": "object",
    "properties": {
        "admin": {
            "type": "boolean"
        },
        "maintain": {
            "type": "boolean"
        },
        "push": {
            "type": "boolean"
        },
        "triage": {
            "type": "boolean"
        },
        "pull": {
            "type": "boolean"
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "admin": false,
    "maintain": false,
    "push": false,
    "triage": false,
    "pull": false
}';

    public function __construct(public bool|null $admin, public bool|null $maintain, public bool|null $push, public bool|null $triage, public bool|null $pull)
    {
    }
}
