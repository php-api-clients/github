<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\RepositoryRuleset\Rules\Fifteen;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class Parameters
{
    public const SCHEMA_JSON         = '{
    "required": [
        "max_file_path_length"
    ],
    "type": "object",
    "properties": {
        "max_file_path_length": {
            "maximum": 256,
            "minimum": 1,
            "type": "integer",
            "description": "The maximum amount of characters allowed in file paths"
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "max_file_path_length": 20
}';

    /**
     * maxFilePathLength: The maximum amount of characters allowed in file paths
     */
    public function __construct(#[MapFrom('max_file_path_length')]
    public int $maxFilePathLength,)
    {
    }
}
