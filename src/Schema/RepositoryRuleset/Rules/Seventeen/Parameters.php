<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\RepositoryRuleset\Rules\Seventeen;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class Parameters
{
    public const SCHEMA_JSON         = '{
    "required": [
        "max_file_size"
    ],
    "type": "object",
    "properties": {
        "max_file_size": {
            "maximum": 100,
            "minimum": 1,
            "type": "integer",
            "description": "The maximum file size allowed in megabytes. This limit does not apply to Git Large File Storage (Git LFS)."
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "max_file_size": 13
}';

    /**
     * maxFileSize: The maximum file size allowed in megabytes. This limit does not apply to Git Large File Storage (Git LFS).
     */
    public function __construct(#[MapFrom('max_file_size')]
    public int $maxFileSize,)
    {
    }
}
