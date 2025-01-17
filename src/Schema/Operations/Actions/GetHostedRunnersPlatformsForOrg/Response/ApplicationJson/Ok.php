<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\Operations\Actions\GetHostedRunnersPlatformsForOrg\Response\ApplicationJson;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class Ok
{
    public const SCHEMA_JSON         = '{
    "required": [
        "total_count",
        "platforms"
    ],
    "type": "object",
    "properties": {
        "total_count": {
            "type": "integer"
        },
        "platforms": {
            "type": "array",
            "items": {
                "type": "string"
            }
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "total_count": 11,
    "platforms": [
        "generated",
        "generated"
    ]
}';

    public function __construct(#[MapFrom('total_count')]
    public int $totalCount, public array $platforms,)
    {
    }
}
