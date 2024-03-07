<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\WebhookMemberAdded\Changes;

final readonly class RoleName
{
    public const SCHEMA_JSON         = '{
    "required": [
        "to"
    ],
    "type": "object",
    "properties": {
        "to": {
            "type": "string"
        }
    },
    "description": "The role assigned to the collaborator."
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = 'The role assigned to the collaborator.';
    public const SCHEMA_EXAMPLE_DATA = '{
    "to": "generated"
}';

    public function __construct(public string $to)
    {
    }
}
