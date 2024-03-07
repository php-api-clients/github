<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\WebhookMemberAdded;

use ApiClients\Client\GitHub\Schema;
use EventSauce\ObjectHydrator\MapFrom;

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
            },
            "description": "This field is included for legacy purposes; use the `role_name` field instead. The `maintain`\\nrole is mapped to `write` and the `triage` role is mapped to `read`. To determine the role\\nassigned to the collaborator, use the `role_name` field instead, which will provide the full\\nrole name, including custom roles."
        },
        "role_name": {
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
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "permission": {
        "to": "read"
    },
    "role_name": {
        "to": "generated"
    }
}';

    /**
     * permission: This field is included for legacy purposes; use the `role_name` field instead. The `maintain`
    role is mapped to `write` and the `triage` role is mapped to `read`. To determine the role
    assigned to the collaborator, use the `role_name` field instead, which will provide the full
    role name, including custom roles.
     * roleName: The role assigned to the collaborator.
     */
    public function __construct(public Schema\WebhookMemberAdded\Changes\Permission|null $permission, #[MapFrom('role_name')]
    public Schema\WebhookMemberAdded\Changes\RoleName|null $roleName,)
    {
    }
}
