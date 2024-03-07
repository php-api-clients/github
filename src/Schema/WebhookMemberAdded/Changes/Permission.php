<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\WebhookMemberAdded\Changes;

final readonly class Permission
{
    public const SCHEMA_JSON         = '{
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
    },
    "description": "This field is included for legacy purposes; use the `role_name` field instead. The `maintain`\\nrole is mapped to `write` and the `triage` role is mapped to `read`. To determine the role\\nassigned to the collaborator, use the `role_name` field instead, which will provide the full\\nrole name, including custom roles."
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = 'This field is included for legacy purposes; use the `role_name` field instead. The `maintain`
role is mapped to `write` and the `triage` role is mapped to `read`. To determine the role
assigned to the collaborator, use the `role_name` field instead, which will provide the full
role name, including custom roles.';
    public const SCHEMA_EXAMPLE_DATA = '{
    "to": "read"
}';

    public function __construct(public string $to)
    {
    }
}
