<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\AliasAbstract\Tiet0CB51C69\TietE939AB7B\TietD52C4E0A;

abstract readonly class Tiet05A5E968
{
    public const SCHEMA_JSON         = '{
    "required": [
        "pull",
        "triage",
        "push",
        "maintain",
        "admin"
    ],
    "type": "object",
    "properties": {
        "pull": {
            "type": "boolean"
        },
        "triage": {
            "type": "boolean"
        },
        "push": {
            "type": "boolean"
        },
        "maintain": {
            "type": "boolean"
        },
        "admin": {
            "type": "boolean"
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "pull": false,
    "triage": false,
    "push": false,
    "maintain": false,
    "admin": false
}';

    public function __construct(public bool $pull, public bool $triage, public bool $push, public bool $maintain, public bool $admin)
    {
    }
}
