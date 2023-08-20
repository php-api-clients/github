<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\WebhookMemberEdited;

use ApiClients\Client\GitHub\Schema;
use EventSauce\ObjectHydrator\MapFrom;

final readonly class Changes
{
    public const SCHEMA_JSON         = '{
    "type": "object",
    "properties": {
        "old_permission": {
            "required": [
                "from"
            ],
            "type": "object",
            "properties": {
                "from": {
                    "type": "string",
                    "description": "The previous permissions of the collaborator if the action was edited."
                }
            }
        },
        "permission": {
            "type": "object",
            "properties": {
                "from": {
                    "type": [
                        "string",
                        "null"
                    ]
                },
                "to": {
                    "type": [
                        "string",
                        "null"
                    ]
                }
            }
        }
    },
    "description": "The changes to the collaborator permissions"
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = 'The changes to the collaborator permissions';
    public const SCHEMA_EXAMPLE_DATA = '{
    "old_permission": {
        "from": "generated"
    },
    "permission": {
        "from": "generated",
        "to": "generated"
    }
}';

    public function __construct(#[MapFrom('old_permission')]
    public Schema\WebhookMemberEdited\Changes\OldPermission|null $oldPermission, public Schema\WebhookMemberEdited\Changes\Permission|null $permission,)
    {
    }
}
