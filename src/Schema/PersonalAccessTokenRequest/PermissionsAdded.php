<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\PersonalAccessTokenRequest;

use ApiClients\Client\GitHub\Schema;

final readonly class PermissionsAdded
{
    public const SCHEMA_JSON         = '{
    "type": "object",
    "properties": {
        "organization": {
            "type": "object",
            "additionalProperties": {
                "type": "string"
            }
        },
        "repository": {
            "type": "object",
            "additionalProperties": {
                "type": "string"
            }
        },
        "other": {
            "type": "object",
            "additionalProperties": {
                "type": "string"
            }
        }
    },
    "description": "New requested permissions, categorized by type of permission."
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = 'New requested permissions, categorized by type of permission.';
    public const SCHEMA_EXAMPLE_DATA = '{
    "organization": [],
    "repository": [],
    "other": []
}';

    public function __construct(public Schema\PersonalAccessTokenRequest\PermissionsAdded\Organization|null $organization, public Schema\PersonalAccessTokenRequest\PermissionsAdded\Repository|null $repository, public Schema\PersonalAccessTokenRequest\PermissionsAdded\Other|null $other)
    {
    }
}
