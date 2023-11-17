<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\Orgs\PatchCustomOrganizationRole\Request;

final readonly class ApplicationJson
{
    public const SCHEMA_JSON         = '{
    "type": "object",
    "properties": {
        "name": {
            "type": "string",
            "description": "The name of the custom role."
        },
        "description": {
            "type": "string",
            "description": "A short description about the intended usage of this role or what permissions it grants."
        },
        "permissions": {
            "type": "array",
            "items": {
                "type": "string"
            },
            "description": "A list of additional permissions included in this role."
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "name": "generated",
    "description": "generated",
    "permissions": [
        "generated",
        "generated"
    ]
}';

    /**
     * name: The name of the custom role.
     * description: A short description about the intended usage of this role or what permissions it grants.
     * permissions: A list of additional permissions included in this role.
     */
    public function __construct(public string|null $name, public string|null $description, public array|null $permissions)
    {
    }
}
