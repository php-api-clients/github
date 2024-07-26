<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\RepositoryRuleset\Rules\Fifteen;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class Parameters
{
    public const SCHEMA_JSON         = '{
    "required": [
        "restricted_file_paths"
    ],
    "type": "object",
    "properties": {
        "restricted_file_paths": {
            "type": "array",
            "items": {
                "type": "string"
            },
            "description": "The file paths that are restricted from being pushed to the commit graph."
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "restricted_file_paths": [
        "generated",
        "generated"
    ]
}';

    /**
     * restrictedFilePaths: The file paths that are restricted from being pushed to the commit graph.
     */
    public function __construct(#[MapFrom('restricted_file_paths')]
    public array $restrictedFilePaths,)
    {
    }
}
