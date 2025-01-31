<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\CodeSecurity\AttachEnterpriseConfiguration\Request;

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
                "all_without_configurations"
            ],
            "type": "string",
            "description": "The type of repositories to attach the configuration to."
        }
    },
    "additionalProperties": false
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "scope": "all"
}';

    /**
     * scope: The type of repositories to attach the configuration to.
     */
    public function __construct(public string $scope)
    {
    }
}
