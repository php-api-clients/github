<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\WebhookMemberAdded;

use ApiClients\Client\GitHub\Schema;

final readonly class Changes
{
    public const SCHEMA_JSON         = '{
    "type": "object",
    "properties": {
        "permission": {
            "required": [
                "to"
            ],
            "type": "object",
            "properties": {
                "to": {
                    "enum": [
                        "write",
                        "admin",
                        "read"
                    ],
                    "type": "string"
                }
            }
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "permission": {
        "to": "read"
    }
}';

    public function __construct(public Schema\WebhookMemberAdded\Changes\Permission|null $permission)
    {
    }
}
