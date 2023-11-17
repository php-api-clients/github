<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema;

final readonly class OrganizationFineGrainedPermission
{
    public const SCHEMA_JSON         = '{
    "title": "Organization Fine-Grained Permission",
    "required": [
        "name",
        "description"
    ],
    "type": "object",
    "properties": {
        "name": {
            "type": "string"
        },
        "description": {
            "type": "string"
        }
    },
    "description": "A fine-grained permission that protects organization resources."
}';
    public const SCHEMA_TITLE        = 'Organization Fine-Grained Permission';
    public const SCHEMA_DESCRIPTION  = 'A fine-grained permission that protects organization resources.';
    public const SCHEMA_EXAMPLE_DATA = '{
    "name": "generated",
    "description": "generated"
}';

    public function __construct(public string $name, public string $description)
    {
    }
}
