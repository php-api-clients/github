<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\CodeSecurity\AttachConfiguration\Request;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class ApplicationJson
{
    public const SCHEMA_JSON         = '{
    "required": [
        "scope"
    ],
    "type": "object",
    "properties": {
        "scope": {
            "enum": [
                "all",
                "all_without_configurations",
                "public",
                "private_or_internal",
                "selected"
            ],
            "type": "string",
            "description": "The type of repositories to attach the configuration to. `selected` means the configuration will be attached to only the repositories specified by `selected_repository_ids`"
        },
        "selected_repository_ids": {
            "type": "array",
            "items": {
                "type": "integer",
                "description": "Unique identifier of the repository."
            },
            "description": "An array of repository IDs to attach the configuration to. You can only provide a list of repository ids when the `scope` is set to `selected`."
        }
    },
    "additionalProperties": false
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "scope": "all",
    "selected_repository_ids": [
        24,
        25
    ]
}';

    /**
     * scope: The type of repositories to attach the configuration to. `selected` means the configuration will be attached to only the repositories specified by `selected_repository_ids`
     * selectedRepositoryIds: An array of repository IDs to attach the configuration to. You can only provide a list of repository ids when the `scope` is set to `selected`.
     */
    public function __construct(public string $scope, #[MapFrom('selected_repository_ids')]
    public array|null $selectedRepositoryIds,)
    {
    }
}
