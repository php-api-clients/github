<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\RepositoryRuleset\Rules\Sixteen;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class Parameters
{
    public const SCHEMA_JSON         = '{
    "required": [
        "restricted_file_extensions"
    ],
    "type": "object",
    "properties": {
        "restricted_file_extensions": {
            "type": "array",
            "items": {
                "type": "string"
            },
            "description": "The file extensions that are restricted from being pushed to the commit graph."
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "restricted_file_extensions": [
        "generated",
        "generated"
    ]
}';

    /**
     * restrictedFileExtensions: The file extensions that are restricted from being pushed to the commit graph.
     */
    public function __construct(#[MapFrom('restricted_file_extensions')]
    public array $restrictedFileExtensions,)
    {
    }
}
