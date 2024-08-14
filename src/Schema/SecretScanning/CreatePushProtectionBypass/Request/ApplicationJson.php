<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\SecretScanning\CreatePushProtectionBypass\Request;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class ApplicationJson
{
    public const SCHEMA_JSON         = '{
    "required": [
        "reason",
        "placeholder_id"
    ],
    "type": "object",
    "properties": {
        "reason": {
            "enum": [
                "false_positive",
                "used_in_tests",
                "will_fix_later"
            ],
            "type": "string",
            "description": "The reason for bypassing push protection."
        },
        "placeholder_id": {
            "type": "string",
            "description": "The ID of the push protection bypass placeholder. This value is returned on any push protected routes."
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "reason": "will_fix_later",
    "placeholder_id": "generated"
}';

    /**
     * reason: The reason for bypassing push protection.
     * placeholderId: The ID of the push protection bypass placeholder. This value is returned on any push protected routes.
     */
    public function __construct(public string $reason, #[MapFrom('placeholder_id')]
    public string $placeholderId,)
    {
    }
}
